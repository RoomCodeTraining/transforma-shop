<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BestProductChart extends ChartWidget
{
    protected static ?string $heading = 'Meilleurs produits';
    protected static ?int $sort = 2;
    protected static ?string $pollingInterval = '10s';
    protected static string $color = 'info';
    protected static ?string $maxHeight = '250px';




    protected function getData(): array
    {
        $bestProducts = \App\Models\Product::withCount('items')->orderBy('items_count', 'desc')->limit(5)->get();
        $productKeys = $bestProducts->pluck('name');
        $productValues = $bestProducts->pluck('items_count');
        return [
            'datasets' => [
                [
                    'label' => 'Répartition des produits les plus vendus',
                    'data' => $productValues,
                    'backgroundColor' => [
                        '#FF6633',
                        '#FFB399',
                        '#FF33FF',
                        '#FFFF99',
                        '#00B3E6',
                    ],
                ],
            ],
            'labels' => $productKeys,
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}