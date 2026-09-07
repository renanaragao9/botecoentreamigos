<?php

namespace App\Filament\Resources\AllergenGuides;

use App\Filament\Resources\AllergenGuides\Pages\CreateAllergenGuide;
use App\Filament\Resources\AllergenGuides\Pages\EditAllergenGuide;
use App\Filament\Resources\AllergenGuides\Pages\ListAllergenGuides;
use App\Filament\Resources\AllergenGuides\Schemas\AllergenGuideForm;
use App\Filament\Resources\AllergenGuides\Tables\AllergenGuidesTable;
use App\Models\AllergenGuide;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AllergenGuideResource extends Resource
{
    protected static ?string $model = AllergenGuide::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedExclamationTriangle;

    protected static string|\UnitEnum|null $navigationGroup = 'Cardápio';

    protected static ?string $navigationLabel = 'Guias de alérgenos';

    protected static ?string $modelLabel = 'guia de alérgeno';

    protected static ?string $pluralModelLabel = 'guias de alérgenos';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return AllergenGuideForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AllergenGuidesTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAllergenGuides::route('/'),
            'create' => CreateAllergenGuide::route('/create'),
            'edit' => EditAllergenGuide::route('/{record}/edit'),
        ];
    }
}
