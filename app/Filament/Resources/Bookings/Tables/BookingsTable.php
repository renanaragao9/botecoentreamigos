<?php

namespace App\Filament\Resources\Bookings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class BookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('date')
            ->columns([
                TextColumn::make('name')->label('Nome')->searchable(),
                TextColumn::make('date')->label('Data')->date('d/m/Y')->sortable(),
                TextColumn::make('time')->label('Horário'),
                TextColumn::make('people')->label('Pessoas'),
                TextColumn::make('event_type')->label('Evento')->limit(25),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'confirmed' => 'Confirmada',
                        'cancelled' => 'Cancelada',
                        default => 'Pendente',
                    }),
            ])
            ->filters([
                SelectFilter::make('status')->label('Status')->options([
                    'pending' => 'Pendente',
                    'confirmed' => 'Confirmada',
                    'cancelled' => 'Cancelada',
                ]),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
