<?php

namespace App\Filament\Resources\GalleryImages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryImageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->label('Foto')
                    ->image()
                    ->imageEditor()
                    ->directory('gallery')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('caption')
                    ->label('Legenda (opcional)')
                    ->maxLength(255),
            ]);
    }
}
