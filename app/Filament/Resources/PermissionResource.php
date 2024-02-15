<?php

namespace App\Filament\Resources;

use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Spatie\Permission\Models\Role;
use Filament\Forms\Components\Grid;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Filament\Resources\PermissionResource\Pages\EditPermission;
use App\Filament\Resources\PermissionResource\Pages\ViewPermission;
use App\Filament\Resources\PermissionResource\Pages\ListPermissions;
use App\Filament\Resources\PermissionResource\Pages\CreatePermission;
use App\Filament\Resources\PermissionResource\Pages\ManagePermissions;
use App\Filament\Resources\PermissionResource\RelationManager\RoleRelationManager;
use App\Filament\Resources\RoleResource\RelationManager\PermissionRelationManager;

class PermissionResource extends Resource
{
    protected static bool $isScopedToTenant = false;

    public static function getNavigationIcon(): ?string
    {
        return config('filament-spatie-roles-permissions.icons.permission_navigation');
    }

    public static function shouldRegisterNavigation(): bool
    {
        return config('filament-spatie-roles-permissions.should_register_on_navigation.permissions', true);
    }

    public static function getModel(): string
    {
        return config('permission.models.permission', Permission::class);
    }

    public static function getLabel(): string
    {
        return __('filament-spatie-roles-permissions::filament-spatie.section.permission');
    }

    public static function getNavigationGroup(): ?string
    {
        return __(config('filament-spatie-roles-permissions.navigation_section_group', 'filament-spatie-roles-permissions::filament-spatie.section.roles_and_permissions'));
    }

    public static function getPluralLabel(): string
    {
        return __('filament-spatie-roles-permissions::filament-spatie.section.permissions');
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make()->schema([
                Grid::make(2)->schema([
                    TextInput::make('name')->label(__('filament-spatie-roles-permissions::filament-spatie.field.name'))->required(),
                    Select::make('guard_name')->label(__('filament-spatie-roles-permissions::filament-spatie.field.guard_name'))->options(config('filament-spatie-roles-permissions.guard_names'))->default(config('filament-spatie-roles-permissions.default_guard_name'))->required(),
                    Select::make('roles')
                        ->multiple()
                        ->label(__('filament-spatie-roles-permissions::filament-spatie.field.roles'))
                        ->relationship(
                            name: 'roles',
                            titleAttribute: 'name',
                            modifyQueryUsing: function (Builder $query) {
                                if (Filament::hasTenancy()) {
                                    return $query->where(config('permission.team_foreign_key'), Filament::getTenant());
                                }

                                return $query;
                            },
                        )
                        ->preload(config('filament-spatie-roles-permissions.preload_roles', true)),
                ]),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([TextColumn::make('created_at')->label('Date de création')->dateTime('d/m/Y'), TextColumn::make('label')->label(__('filament-spatie-roles-permissions::filament-spatie.field.name'))->searchable(), TextColumn::make('guard_name')->toggleable(isToggledHiddenByDefault: config('filament-spatie-roles-permissions.toggleable_guard_names.permissions.isToggledHiddenByDefault', true))->label(__('filament-spatie-roles-permissions::filament-spatie.field.guard_name'))->searchable()])
            ->filters([
                Filter::make('models')
                    ->label('Models')
                    ->form(function () {
                        $commands = new \Althinect\FilamentSpatieRolesPermissions\Commands\Permission();
                        $models = $commands->getAllModels();
                        return array_map(function (\ReflectionClass $model) {
                            return Checkbox::make($model->getShortName());
                        }, $models);
                    })
                    ->query(function (Builder $query, array $data) {
                        return $query->where(function (Builder $query) use ($data) {
                            foreach ($data as $key => $value) {
                                if ($value) {
                                    $query->orWhere('name', 'like', eval(config('filament-spatie-roles-permissions.model_filter_key')));
                                }
                            }
                        });
                    }),
            ])
            ->actions([ActionGroup::make([Tables\Actions\EditAction::make(), Tables\Actions\ViewAction::make()])])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()]),
                BulkAction::make('Attach to roles')
                    ->action(function (Collection $records, array $data): void {
                        Role::whereIn('id', $data['roles'])->each(function (Role $role) use ($records): void {
                            $records->each(fn (Permission $permission) => $role->givePermissionTo($permission));
                        });
                    })
                    ->form([Select::make('roles')->multiple()->label(__('filament-spatie-roles-permissions::filament-spatie.field.role'))->options(Role::query()->pluck('name', 'id'))->required()])
                    ->deselectRecordsAfterCompletion(),
            ])
            ->emptyStateActions([Tables\Actions\CreateAction::make()]);
    }

    public static function getRelations(): array
    {
        return [PermissionRelationManager::class];
    }

    public static function getPages(): array
    {
        return [
            'index' => ManagePermissions::route('/'),
        ];
    }
}