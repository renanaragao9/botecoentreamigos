<?php

namespace App\Filament\Resources\EventItems\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EventItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->label('Descrição')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Foto do evento')
                    ->image()
                    ->imageEditor()
                    ->directory('events')
                    ->columnSpanFull(),
            ]);
    }
}
