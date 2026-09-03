<?php

namespace App\Filament\Resources\ContactInfos\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContactInfoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('business_name')
                    ->label('Nome do estabelecimento')
                    ->required()
                    ->maxLength(255),
                TextInput::make('hero_title')
                    ->label('Título principal')
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('hero_subtitle')
                    ->label('Subtítulo principal')
                    ->maxLength(255)
                    ->columnSpanFull(),
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
                TextInput::make('instagram_url')
                    ->label('Instagram')
                    ->url()
                    ->maxLength(255),
                TextInput::make('facebook_url')
                    ->label('Facebook')
                    ->url()
                    ->maxLength(255),
                Textarea::make('map_embed_url')
                    ->label('URL do embed do Google Maps')
                    ->rows(3)
                    ->columnSpanFull(),
                TextInput::make('seo_title')
                    ->label('Título para buscadores')
                    ->maxLength(255)
                    ->columnSpanFull(),
                Textarea::make('seo_description')
                    ->label('Descrição para buscadores')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
