<?php

namespace Database\Seeders;

use App\Models\GalleryImage;
use Database\Seeders\Concerns\SeedImages;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    use SeedImages;

    public function run(): void
    {
        foreach (range(1, 8) as $i) {
            GalleryImage::create([
                'image' => $this->seedImage("img{$i}.jpeg", 'gallery', 'gallery'),
                'order' => $i,
            ]);
        }
    }
}
