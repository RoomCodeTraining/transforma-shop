<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestOrder extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?int $sort = 2;
    protected static ?string $heading = 'Dernières commandes';


    public function table(Table $table): Table
    {
        return $table
            ->query(
                \App\Models\Order::query()
                    ->orderBy('created_at', 'desc')
                    ->limit(10)
            )
            ->columns([
                TextColumn::make('created_at')
                    ->label('Créé le')
                    ->dateTime('d/m/Y H:i:s'),
                TextColumn::make('reference')
                    ->label('Référence')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('state')
                    ->label('Statut')
                    ->color(fn ($record) => $record->state->color())
                    ->formatStateUsing(fn ($record) => $record->state->description())
                    ->badge()
                    ->sortable(),
                TextColumn::make('id')
                    ->label('Client')
                    ->formatStateUsing(fn ($record) => $record->customer->full_name)
                    ->searchable()
                    ->sortable(),
            ]);
    }
}