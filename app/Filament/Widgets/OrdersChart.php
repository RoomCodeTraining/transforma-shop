<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class OrdersChart extends ChartWidget
{
    protected static ?string $heading = 'Evolutions des commandes par mois';

    protected static ?int $sort = 1;

    protected function getType(): string
    {
        return 'line';
    }

    protected function getData(): array
    {
        $orders = \App\Models\Order::query()->selectRaw('COUNT(*) as count, MONTH(created_at) as month')->whereYear('created_at', date('Y'))->groupBy('month')->orderBy('month')->pluck('count', 'month');

        return [
            'datasets' => [
                [
                    'label' => 'Commandes',
                    'data' => $orders->values()->toArray(),
                    'fill' => 'start',
                ],
            ],
            'labels' => ['Janvir', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
        ];
    }
}