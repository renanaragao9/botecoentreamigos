<?php

namespace App\Filament\Resources\ContactInfos\Pages;

use App\Filament\Resources\ContactInfos\ContactInfoResource;
use App\Models\ContactInfo;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactInfos extends ListRecords
{
    protected static string $resource = ContactInfoResource::class;

    protected static ?string $title = 'Configurações do site';

    protected function getHeaderActions(): array
    {
        return ContactInfo::query()->exists() ? [] : [CreateAction::make()];
    }
}
