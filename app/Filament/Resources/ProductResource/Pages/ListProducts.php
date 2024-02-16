<?php

namespace App\Filament\Resources\ProductResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ProductResource;
use Filament\Pages\Concerns\ExposesTableToWidgets;
use Filament\Resources\Components\Tab;

class ListProducts extends ListRecords
{
    use ExposesTableToWidgets;

    protected static string $resource = ProductResource::class;

    protected function getHeaderWidgets(): array
    {
        return ProductResource::getWidgets();
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Ajouter un produit')->hidden(fn () => ! auth()->user()->can(\App\Enums\Permission::CREATE_PRODUCT))
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('Tous les produits'),
            'Disponible en stock' => Tab::make()->query(fn ($query) => $query->where('on_stock', true)),
            'Rupture de stock' => Tab::make()->query(fn ($query) => $query->where('on_stock', false)),
        ];
    }
}