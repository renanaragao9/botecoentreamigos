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

    protected static string|\UnitEnum|null $navigationGroup = 'Contato';

    protected static ?string $navigationLabel = 'Contato';

    protected static ?string $modelLabel = 'informação de contato';

    protected static ?string $pluralModelLabel = 'informações de contato';

    protected static ?int $navigationSort = 1;

    public static function canCreate(): bool
    {
        return static::getModel()::count() === 0;
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
