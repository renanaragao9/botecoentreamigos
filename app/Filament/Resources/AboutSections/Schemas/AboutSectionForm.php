<?php

namespace App\Filament\Resources\AboutSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AboutSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->maxLength(255),
                Textarea::make('intro_text')
                    ->label('Texto de introdução')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                Textarea::make('closing_text')
                    ->label('Texto final')
                    ->rows(2)
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Foto do salão')
                    ->image()
                    ->imageEditor()
                    ->directory('about')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
