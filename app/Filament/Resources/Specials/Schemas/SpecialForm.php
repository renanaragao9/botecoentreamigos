<?php

namespace App\Filament\Resources\Specials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SpecialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->maxLength(255),
                TextInput::make('subtitle')
                    ->label('Subtítulo')
                    ->maxLength(255),
                Textarea::make('description')
                    ->label('Descrição')
                    ->helperText('Deixe uma linha em branco para separar parágrafos.')
                    ->required()
                    ->rows(5)
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Foto do prato')
                    ->image()
                    ->imageEditor()
                    ->directory('specials')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
