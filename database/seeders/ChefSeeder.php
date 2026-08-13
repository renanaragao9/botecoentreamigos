<?php

namespace Database\Seeders;

use App\Models\Chef;
use Database\Seeders\Concerns\SeedImages;
use Illuminate\Database\Seeder;

class ChefSeeder extends Seeder
{
    use SeedImages;

    public function run(): void
    {
        foreach ([
            ['name' => 'Nice Sousa', 'image' => 'chef.jpeg', 'facebook_url' => 'https://www.facebook.com/nice.rabelo', 'instagram_url' => 'https://www.instagram.com/_nicerabelo/'],
            ['name' => 'Elizete Rabelo', 'image' => 'asdasd.jpeg', 'facebook_url' => 'https://www.facebook.com/profile.php?id=100005592165935', 'instagram_url' => 'https://www.instagram.com/elizeterabeo/'],
            ['name' => 'Franci', 'image' => 'WhatsApp Image 2022-06-23 at 10.32.01.jpeg', 'facebook_url' => null, 'instagram_url' => null],
        ] as $i => $chef) {
            $chef['image'] = $this->seedImage($chef['image'], 'chefs', 'chefs');
            Chef::create([...$chef, 'order' => $i]);
        }
    }
}
