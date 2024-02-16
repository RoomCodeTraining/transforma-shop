<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Order;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use App\StateMachine\Order\OrderState;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use App\StateMachine\Order\DeliveryInProgress;
use App\Filament\Resources\OrderResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Filament\Resources\OrderResource\Widgets\OrderStats;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static bool $softDelete = true;
    protected static ?string $label = 'Commandes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Créé le')
                    ->dateTime('d/m/Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('reference')
                    ->label('Référence')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('state')
                    ->label('Statut')
                    ->color(fn ($record) => $record->state->color())
                    ->formatStateUsing(fn ($record) => $record->state->description())
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('id')
                    ->label('Client')
                    ->formatStateUsing(fn ($record) => $record->customer->full_name)
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Action::make('delivery_in_progress')
                        ->icon('heroicon-o-truck')
                        ->label('Valider la livraison')->color('success')
                        ->requiresConfirmation()
                        ->hidden(fn ($record) => $record->state->canTransitionTo(DeliveryInProgress::class) === false)
                        ->modalDescription(fn ($record) => 'Êtes-vous sûr de vouloir valider la livraison de la commande ' . $record->reference . ' ?')
                        ->action(function ($record) {
                            if($record->state->canTransitionTo(DeliveryInProgress::class)) {
                                Notification::make()
                                ->danger()
                                ->title('Opération échouée')->body('La livraison de la commande ' . $record->reference . ' a échouée.')->send();
                                return;
                            }
                            $record->state->transitionTo(DeliveryInProgress::class);
                            Notification::make()
                            ->success()
                            ->title('Opération réussie')->body('La livraison de la commande ' . $record->reference . ' a été validée avec succès.')->send();
                        }),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getWidgets(): array
    {
        return [
            OrderStats::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
        ];
    }
}