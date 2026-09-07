<?php

namespace Tests\Feature;

use App\Models\MenuItem;
use Database\Seeders\FallbackImageSeeder;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FallbackImagesTest extends TestCase
{
    public function test_models_resolve_a_fallback_for_a_missing_image(): void
    {
        Storage::fake('public');

        $this->seed(FallbackImageSeeder::class);

        $this->assertSame('menu/espetos.jpg', (new MenuItem)->image);
        Storage::disk('public')->assertExists('menu/espetos.jpg');
    }
}
