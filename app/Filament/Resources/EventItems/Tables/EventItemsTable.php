<?php

namespace App\Filament\Resources\EventItems\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EventItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('order')
            ->reorderable('order')
            ->reorderRecordsTriggerAction(fn ($action) => $action->label('Reordenar (arraste)'))
            ->columns([
                ImageColumn::make('image')->label('Foto')->circular(),
                TextColumn::make('title')->label('Título')->searchable(),
                TextColumn::make('features_count')->counts('features')->label('Itens da lista'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
