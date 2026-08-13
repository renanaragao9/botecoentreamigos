<?php

namespace App\Filament\Resources\Specials;

use App\Filament\Resources\Specials\Pages\CreateSpecial;
use App\Filament\Resources\Specials\Pages\EditSpecial;
use App\Filament\Resources\Specials\Pages\ListSpecials;
use App\Filament\Resources\Specials\Schemas\SpecialForm;
use App\Filament\Resources\Specials\Tables\SpecialsTable;
use App\Models\Special;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SpecialResource extends Resource
{
    protected static ?string $model = Special::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedStar;

    protected static string|\UnitEnum|null $navigationGroup = 'Especiais';

    protected static ?string $navigationLabel = 'Pratos Especiais';

    protected static ?string $modelLabel = 'prato especial';

    protected static ?string $pluralModelLabel = 'pratos especiais';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return SpecialForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SpecialsTable::configure($table);
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
            'index' => ListSpecials::route('/'),
            'create' => CreateSpecial::route('/create'),
            'edit' => EditSpecial::route('/{record}/edit'),
        ];
    }
}
