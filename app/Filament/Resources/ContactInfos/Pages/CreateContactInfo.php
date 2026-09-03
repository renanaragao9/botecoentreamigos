<?php

namespace App\Filament\Resources\ContactInfos\Pages;

use App\Filament\Resources\ContactInfos\ContactInfoResource;
use App\Models\ContactInfo;
use Filament\Resources\Pages\CreateRecord;

class CreateContactInfo extends CreateRecord
{
    protected static string $resource = ContactInfoResource::class;

    public function mount(): void
    {
        parent::mount();

        if ($contactInfo = ContactInfo::query()->first()) {
            $this->redirect(ContactInfoResource::getUrl('edit', ['record' => $contactInfo]));
        }
    }
}
