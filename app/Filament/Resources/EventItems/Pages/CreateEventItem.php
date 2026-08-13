<?php

namespace App\Filament\Resources\EventItems\Pages;

use App\Filament\Resources\EventItems\EventItemResource;
use App\Filament\Concerns\SetsNextOrder;
use Filament\Resources\Pages\CreateRecord;

class CreateEventItem extends CreateRecord
{
    use SetsNextOrder;

    protected static string $resource = EventItemResource::class;
}
