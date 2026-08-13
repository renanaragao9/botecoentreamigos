<?php

namespace App\Filament\Resources\Chefs\Pages;

use App\Filament\Resources\Chefs\ChefResource;
use App\Filament\Concerns\SetsNextOrder;
use Filament\Resources\Pages\CreateRecord;

class CreateChef extends CreateRecord
{
    use SetsNextOrder;

    protected static string $resource = ChefResource::class;
}
