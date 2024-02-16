<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use App\Filament\Resources\ProductResource\Pages\ListProducts;

class ProductStats extends BaseWidget
{
    protected function getTablePage(): string
    {
        return ListProducts::class;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Produits', \App\Models\Product::count())->icon('heroicon-o-shopping-cart'),
            Stat::make('En stock', \App\Models\Product::inStock()->count())->icon('heroicon-o-shopping-cart'),
            Stat::make('En rupture de stock', \App\Models\Product::outOfStock()->count())->icon('heroicon-o-shopping-cart'),
        ];
    }
}