<?php

namespace App\Filament\Resources\OrderResource\Pages;

use Filament\Actions;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\OrderResource;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;

class ViewOrder extends ViewRecord
{
    protected static string $resource = OrderResource::class;
    protected static ?string $title ='Détails de la commande';

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Informations de la commande')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('created_at')
                            ->label('Date de la commande')
                            ->dateTime('d/m/Y H:i:s'),
                        TextEntry::make('reference')
                            ->label('Référence'),
                        TextEntry::make('state')
                            ->label('Statut')
                            ->color(fn ($record) => $record->state->color())
                            ->badge()
                            ->formatStateUsing(fn ($record) => $record->state->description()),
                        TextEntry::make('price')
                            ->label('Prix total')
                            ->money('XOF'),
                        TextEntry::make('customer.full_name')
                            ->label('Client'),
                        TextEntry::make('customer.email')
                            ->label('Email'),
                        TextEntry::make('customer.contact')
                            ->label('Téléphone'),
                    ]),
            ]);
    }
}