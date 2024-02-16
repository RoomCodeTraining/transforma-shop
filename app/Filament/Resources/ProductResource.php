<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static bool $softDelete = true;
    protected static ?string $label = 'Produits';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    TextInput::make('name')
                        ->label('Nom')
                        ->required(),
                    TextInput::make('price')
                        ->label('Prix')
                        ->required(),
                    TextInput::make('on_stock')
                        ->label('Stock')
                        ->required(),
                    Select::make('category_id')
                        ->label('Catégorie')
                        ->options(
                            \App\Models\Category::all()->pluck('name', 'id')
                        )->required(),
                ])->columns(2),
                Section::make([
                    RichEditor::make('description')
                        ->label('Description')
                        ->required(),
                    FileUpload::make('image')
                        ->label('Image')
                        ->required(),
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->label('Créé le')
                    ->dateTime('d/m/Y')
                    ->sortable(),
                TextColumn::make('name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('price')
                    ->label('Prix')
                    ->sortable()
                    ->money('XOF'),
                ImageColumn::make('image')
                    ->label('Image')
                    ->sortable(),
                TextColumn::make('on_stock')
                    ->badge()
                    ->color(fn ($record) => $record->on_stock ? 'success' : 'danger')
                    ->formatStateUsing(fn ($record) => $record->on_stock ? 'En stock' : 'Rupture de stock')
                    ->label('Stock')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make()->color('info'),
                    EditAction::make()->color('secondary'),
                    DeleteAction::make(),
                ]),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}