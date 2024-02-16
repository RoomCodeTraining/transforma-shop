<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use App\StateMachine\Order\Cancelled;
use App\StateMachine\Order\Confirmed;
use App\Filament\Resources\OrderResource;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use App\Filament\Resources\OrderResource\Pages\ListOrders;

class OrderStats extends BaseWidget
{
    protected function getTablePage(): string
    {
        return ListOrders::class;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Commandes', \App\Models\Order::count())->icon('heroicon-o-shopping-cart'),
            Stat::make('En attente', Order::whereState('state', Confirmed::class)->count())->icon('heroicon-o-shopping-cart'),
            Stat::make('Annulées', Order::whereState('state', Cancelled::class)->count())->icon('heroicon-o-shopping-cart'),
            Stat::make('Livrées', Order::whereState('state', \App\StateMachine\Order\Delivered::class)->count())->icon('heroicon-o-shopping-cart'),
        ];
    }
}