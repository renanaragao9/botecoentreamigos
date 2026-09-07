<?php

namespace App\Filament\Resources\AllergenGuides\Pages;

use App\Filament\Resources\AllergenGuides\AllergenGuideResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAllergenGuide extends EditRecord
{
    protected static string $resource = AllergenGuideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
