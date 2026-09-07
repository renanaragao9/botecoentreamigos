<?php

namespace App\Filament\Resources\AllergenGuides\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AllergenGuideForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->label('Nome')
                ->required()
                ->maxLength(255)
                ->columnSpanFull(),
            FileUpload::make('icon')
                ->label('Ícone')
                ->disk('public')
                ->visibility('public')
                ->directory('allergen-guides')
                ->image()
                ->required()
                ->columnSpanFull(),
        ]);
    }
}
