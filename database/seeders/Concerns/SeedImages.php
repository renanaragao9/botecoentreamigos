<?php

namespace Database\Seeders\Concerns;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

trait SeedImages
{
    /**
     * Copia uma imagem de public/assets/img/<sourceSubDir>/<file> para o disco
     * "public" (storage/app/public/<targetDir>/<file>), para que ela apareça
     * já pronta no painel e possa ser trocada pelo admin depois.
     */
    protected function seedImage(string $file, string $targetDir, ?string $sourceSubDir = null): string
    {
        $sourcePath = public_path('assets/img'.($sourceSubDir ? "/{$sourceSubDir}" : '')."/{$file}");

        if (! File::exists($sourcePath)) {
            return "{$targetDir}/{$file}";
        }

        $destination = "{$targetDir}/{$file}";

        Storage::disk('public')->put($destination, File::get($sourcePath));

        return $destination;
    }
}
