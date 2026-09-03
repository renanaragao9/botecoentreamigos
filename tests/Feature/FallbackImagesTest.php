<?php

namespace Tests\Feature;

use App\Models\AboutSection;
use App\Models\Chef;
use App\Models\EventItem;
use App\Models\GalleryImage;
use App\Models\MenuItem;
use App\Models\Special;
use App\Models\Testimonial;
use Database\Seeders\FallbackImageSeeder;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FallbackImagesTest extends TestCase
{
    public function test_models_resolve_a_fallback_for_a_missing_image(): void
    {
        Storage::fake('public');

        $this->seed(FallbackImageSeeder::class);

        $this->assertSame('about/barrrr.jpeg', (new AboutSection)->image);
        $this->assertSame('menu/espetos.jpg', (new MenuItem)->image);
        $this->assertSame('specials/feijao.jpeg', (new Special)->image);
        $this->assertSame('events/aniversario.jpeg', (new EventItem)->image);
        $this->assertSame('testimonials/mulher.jpg', (new Testimonial)->image);
        $this->assertSame('chefs/chef.jpeg', (new Chef)->image);
        $this->assertSame('gallery/img1.jpeg', (new GalleryImage)->image);
        Storage::disk('public')->assertExists('menu/espetos.jpg');
    }
}
