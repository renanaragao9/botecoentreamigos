<?php

namespace App\Filament\Resources\Chefs;

use App\Filament\Resources\Chefs\Pages\CreateChef;
use App\Filament\Resources\Chefs\Pages\EditChef;
use App\Filament\Resources\Chefs\Pages\ListChefs;
use App\Filament\Resources\Chefs\Schemas\ChefForm;
use App\Filament\Resources\Chefs\Tables\ChefsTable;
use App\Models\Chef;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ChefResource extends Resource
{
    protected static ?string $model = Chef::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static string|\UnitEnum|null $navigationGroup = 'Página Inicial';

    protected static ?string $navigationLabel = 'Chefs';

    protected static ?string $modelLabel = 'chef';

    protected static ?string $pluralModelLabel = 'chefs';

    protected static ?int $navigationSort = 9;

    public static function form(Schema $schema): Schema
    {
        return ChefForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ChefsTable::configure($table);
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
            'index' => ListChefs::route('/'),
            'create' => CreateChef::route('/create'),
            'edit' => EditChef::route('/{record}/edit'),
        ];
    }
}
