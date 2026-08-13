<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome')
                    ->required()
                    ->maxLength(255),
                TextInput::make('source')
                    ->label('Fonte')
                    ->default('Google Avaliação')
                    ->maxLength(255),
                FileUpload::make('image')
                    ->label('Foto do cliente')
                    ->image()
                    ->imageEditor()
                    ->directory('testimonials')
                    ->columnSpanFull(),
                Textarea::make('text')
                    ->label('Depoimento')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
            ]);
    }
}
