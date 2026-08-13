<?php

namespace App\Filament\Concerns;

trait SetsNextOrder
{
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $model = static::getResource()::getModel();

        $data['order'] = ($model::withoutGlobalScopes()->max('order') ?? 0) + 1;

        return $data;
    }
}
