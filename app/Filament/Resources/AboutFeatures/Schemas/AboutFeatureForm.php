<?php

namespace App\Filament\Resources\AboutFeatures\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AboutFeatureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('text')
                    ->label('Texto')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]);
    }
}
