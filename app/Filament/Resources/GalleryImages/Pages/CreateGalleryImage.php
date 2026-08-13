<?php

namespace App\Filament\Resources\GalleryImages\Pages;

use App\Filament\Resources\GalleryImages\GalleryImageResource;
use App\Filament\Concerns\SetsNextOrder;
use Filament\Resources\Pages\CreateRecord;

class CreateGalleryImage extends CreateRecord
{
    use SetsNextOrder;

    protected static string $resource = GalleryImageResource::class;
}
