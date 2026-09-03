<?php

namespace App\Filament\Resources\MenuItems\Schemas;

use App\Models\MenuCategory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MenuItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('menu_category_id')
                    ->label('Categoria')
                    ->options(fn () => MenuCategory::query()->pluck('name', 'id'))
                    ->required()
                    ->searchable(),
                TextInput::make('name')
                    ->label('Nome')
                    ->required()
                    ->maxLength(255),
                TextInput::make('price')
                    ->label('Preço')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('R$ 0,00'),
                Toggle::make('active')
                    ->label('Ativo (aparece no site)')
                    ->default(true),
                FileUpload::make('image')
                    ->label('Foto do prato')
                    ->image()
                    ->imageEditor()
                    ->directory('menu')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->label('Descrição')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
