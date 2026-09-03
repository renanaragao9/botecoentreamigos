<?php

namespace App\Filament\Resources\Bookings\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Nome')->required()->maxLength(120),
                TextInput::make('email')->label('Email')->email()->required()->maxLength(150),
                TextInput::make('phone')->label('Telefone')->required()->maxLength(30),
                TextInput::make('date')->label('Data')->type('date')->required(),
                TextInput::make('time')->label('Horário')->type('time')->required(),
                TextInput::make('people')->label('Pessoas')->numeric()->minValue(1)->maxValue(200)->required(),
                TextInput::make('event_type')->label('Tipo de evento')->maxLength(120),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pendente',
                        'confirmed' => 'Confirmada',
                        'cancelled' => 'Cancelada',
                    ])
                    ->default('pending')
                    ->required(),
                Textarea::make('message')->label('Mensagem')->rows(4)->columnSpanFull(),
            ]);
    }
}
