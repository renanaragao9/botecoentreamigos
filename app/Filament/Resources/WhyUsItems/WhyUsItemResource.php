<?php

namespace App\Filament\Resources\WhyUsItems;

use App\Filament\Resources\WhyUsItems\Pages\CreateWhyUsItem;
use App\Filament\Resources\WhyUsItems\Pages\EditWhyUsItem;
use App\Filament\Resources\WhyUsItems\Pages\ListWhyUsItems;
use App\Filament\Resources\WhyUsItems\Schemas\WhyUsItemForm;
use App\Filament\Resources\WhyUsItems\Tables\WhyUsItemsTable;
use App\Models\WhyUsItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WhyUsItemResource extends Resource
{
    protected static ?string $model = WhyUsItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSparkles;

    protected static string|\UnitEnum|null $navigationGroup = 'Página Inicial';

    protected static ?string $navigationLabel = 'Por que nós';

    protected static ?string $modelLabel = 'motivo';

    protected static ?string $pluralModelLabel = 'motivos (Por que nós)';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return WhyUsItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WhyUsItemsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWhyUsItems::route('/'),
            'create' => CreateWhyUsItem::route('/create'),
            'edit' => EditWhyUsItem::route('/{record}/edit'),
        ];
    }
}
