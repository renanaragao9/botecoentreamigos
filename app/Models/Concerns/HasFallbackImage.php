<?php

namespace App\Models\Concerns;

use Illuminate\Support\Facades\Storage;

trait HasFallbackImage
{
    abstract protected function fallbackImage(): string;

    public function getImageAttribute(?string $value): string
    {
        if (filled($value) && Storage::disk('public')->exists($value)) {
            return $value;
        }

        return $this->fallbackImage();
    }
}
