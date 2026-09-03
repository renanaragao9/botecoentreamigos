<?php

namespace App\Filament\Resources\ContactInfos;

use App\Filament\Resources\ContactInfos\Pages\CreateContactInfo;
use App\Filament\Resources\ContactInfos\Pages\EditContactInfo;
use App\Filament\Resources\ContactInfos\Pages\ListContactInfos;
use App\Filament\Resources\ContactInfos\Schemas\ContactInfoForm;
use App\Filament\Resources\ContactInfos\Tables\ContactInfosTable;
use App\Models\ContactInfo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContactInfoResource extends Resource
{
    protected static ?string $model = ContactInfo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhone;

    protected static string|\UnitEnum|null $navigationGroup = 'Página Inicial';

    protected static ?string $navigationLabel = 'Configurações do site';

    protected static ?string $modelLabel = 'configuração do site';

    protected static ?string $pluralModelLabel = 'configurações do site';

    protected static ?int $navigationSort = 1;

    public static function canCreate(): bool
    {
        return true;
    }

    public static function form(Schema $schema): Schema
    {
        return ContactInfoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactInfosTable::configure($table);
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
            'index' => ListContactInfos::route('/'),
            'create' => CreateContactInfo::route('/create'),
            'edit' => EditContactInfo::route('/{record}/edit'),
        ];
    }
}
