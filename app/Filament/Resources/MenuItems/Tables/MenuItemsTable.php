<?php

namespace App\Filament\Resources\MenuItems\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class MenuItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('order')
            ->reorderable('order')
            ->reorderRecordsTriggerAction(fn ($action) => $action->label('Reordenar (arraste)'))
            ->columns([
                TextColumn::make('name')->label('Nome')->searchable(),
                TextColumn::make('category.name')->label('Categoria')->badge(),
                TextColumn::make('price')->label('Preço'),
                IconColumn::make('active')->label('Ativo')->boolean(),
            ])
            ->filters([
                SelectFilter::make('menu_category_id')
                    ->label('Categoria')
                    ->relationship('category', 'name'),
                TernaryFilter::make('active')
                    ->label('Ativo'),
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
