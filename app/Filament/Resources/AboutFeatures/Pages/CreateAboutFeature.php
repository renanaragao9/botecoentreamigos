<?php

namespace App\Filament\Resources\AboutFeatures\Pages;

use App\Filament\Resources\AboutFeatures\AboutFeatureResource;
use App\Filament\Concerns\SetsNextOrder;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutFeature extends CreateRecord
{
    use SetsNextOrder;

    protected static string $resource = AboutFeatureResource::class;
}
