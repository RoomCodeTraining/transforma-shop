<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '10s';

    protected function getStats(): array
    {
        return [
            Stat::make('Categories', Category::count())->icon('heroicon-o-list-bullet'),
            Stat::make('Produits', Product::count())->icon('heroicon-o-shopping-cart'),
            Stat::make('Commandes', Order::count())->icon('heroicon-o-shopping-cart'),

        ];
    }
}