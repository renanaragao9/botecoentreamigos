<?php

namespace App\Filament\Resources\WhyUsItems\Pages;

use App\Filament\Resources\WhyUsItems\WhyUsItemResource;
use App\Filament\Concerns\SetsNextOrder;
use Filament\Resources\Pages\CreateRecord;

class CreateWhyUsItem extends CreateRecord
{
    use SetsNextOrder;

    protected static string $resource = WhyUsItemResource::class;
}
