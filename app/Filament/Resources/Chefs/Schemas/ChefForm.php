<?php

namespace App\Filament\Resources\Chefs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ChefForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome')
                    ->required()
                    ->maxLength(255),
                TextInput::make('facebook_url')
                    ->label('Facebook')
                    ->url()
                    ->placeholder('https://facebook.com/...')
                    ->maxLength(255),
                TextInput::make('instagram_url')
                    ->label('Instagram')
                    ->url()
                    ->placeholder('https://instagram.com/...')
                    ->maxLength(255),
                FileUpload::make('image')
                    ->label('Foto')
                    ->image()
                    ->imageEditor()
                    ->directory('chefs')
                    ->columnSpanFull(),
            ]);
    }
}
