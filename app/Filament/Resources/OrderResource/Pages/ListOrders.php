<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderWidgets(): array
    {
        return OrderResource::getWidgets();
    }

    protected function getHeaderActions(): array
    {
        return [];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('Toutes les commandes'),
            'En attente' => Tab::make()->query(fn ($query) => $query->whereState('state', \App\StateMachine\Order\Confirmed::class)),
            'Annulées' => Tab::make()->query(fn ($query) => $query->whereState('state', \App\StateMachine\Order\Cancelled::class)),
            'Livrées' => Tab::make()->query(fn ($query) => $query->whereState('state', \App\StateMachine\Order\Delivered::class)),
        ];
    }
}