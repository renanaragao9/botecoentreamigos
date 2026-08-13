<?php

namespace App\Filament\Resources\Chefs\Pages;

use App\Filament\Resources\Chefs\ChefResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditChef extends EditRecord
{
    protected static string $resource = ChefResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
