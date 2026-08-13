<?php

namespace App\Filament\Resources\ContactInfos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactInfoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('address')
                    ->label('Endereço')
                    ->required()
                    ->maxLength(255),
                TextInput::make('open_hours')
                    ->label('Horário de funcionamento')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                TextInput::make('phone')
                    ->label('Telefone')
                    ->required()
                    ->maxLength(255),
                TextInput::make('whatsapp')
                    ->label('WhatsApp (só números, com DDI)')
                    ->maxLength(255),
                Textarea::make('map_embed_url')
                    ->label('URL do embed do Google Maps')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
