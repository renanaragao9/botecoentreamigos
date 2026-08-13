<?php

namespace App\Filament\Resources\Chefs\Pages;

use App\Filament\Resources\Chefs\ChefResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListChefs extends ListRecords
{
    protected static string $resource = ChefResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
