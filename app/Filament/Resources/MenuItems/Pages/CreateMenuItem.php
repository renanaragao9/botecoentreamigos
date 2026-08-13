<?php

namespace App\Filament\Resources\MenuItems\Pages;

use App\Filament\Resources\MenuItems\MenuItemResource;
use App\Filament\Concerns\SetsNextOrder;
use Filament\Resources\Pages\CreateRecord;

class CreateMenuItem extends CreateRecord
{
    use SetsNextOrder;

    protected static string $resource = MenuItemResource::class;
}
