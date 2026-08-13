<?php

namespace App\Filament\Resources\Specials\Pages;

use App\Filament\Resources\Specials\SpecialResource;
use App\Filament\Concerns\SetsNextOrder;
use Filament\Resources\Pages\CreateRecord;

class CreateSpecial extends CreateRecord
{
    use SetsNextOrder;

    protected static string $resource = SpecialResource::class;
}
