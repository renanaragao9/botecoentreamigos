<?php

namespace App\Filament\Resources\EventItems;

use App\Filament\Resources\EventItems\Pages\CreateEventItem;
use App\Filament\Resources\EventItems\Pages\EditEventItem;
use App\Filament\Resources\EventItems\Pages\ListEventItems;
use App\Filament\Resources\EventItems\RelationManagers\FeaturesRelationManager;
use App\Filament\Resources\EventItems\Schemas\EventItemForm;
use App\Filament\Resources\EventItems\Tables\EventItemsTable;
use App\Models\EventItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EventItemResource extends Resource
{
    protected static ?string $model = EventItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDays;

    protected static string|\UnitEnum|null $navigationGroup = 'Página Inicial';

    protected static ?string $navigationLabel = 'Eventos';

    protected static ?string $modelLabel = 'evento';

    protected static ?string $pluralModelLabel = 'eventos';

    protected static ?int $navigationSort = 6;

    public static function form(Schema $schema): Schema
    {
        return EventItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EventItemsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            FeaturesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEventItems::route('/'),
            'create' => CreateEventItem::route('/create'),
            'edit' => EditEventItem::route('/{record}/edit'),
        ];
    }
}
