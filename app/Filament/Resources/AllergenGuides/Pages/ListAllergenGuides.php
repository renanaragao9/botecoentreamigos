<?php

namespace App\Filament\Resources\AllergenGuides\Pages;

use App\Filament\Resources\AllergenGuides\AllergenGuideResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAllergenGuides extends ListRecords
{
    protected static string $resource = AllergenGuideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
