<?php

namespace App\Filament\Resources\AboutSections\Pages;

use App\Filament\Resources\AboutSections\AboutSectionResource;
use App\Models\AboutSection;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutSection extends CreateRecord
{
    protected static string $resource = AboutSectionResource::class;

    public function mount(): void
    {
        parent::mount();

        if ($aboutSection = AboutSection::query()->first()) {
            $this->redirect(AboutSectionResource::getUrl('edit', ['record' => $aboutSection]));
        }
    }
}
