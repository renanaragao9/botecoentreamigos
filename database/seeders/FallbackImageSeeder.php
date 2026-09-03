<?php

namespace Database\Seeders;

use Database\Seeders\Concerns\SeedImages;
use Illuminate\Database\Seeder;

class FallbackImageSeeder extends Seeder
{
    use SeedImages;

    public function run(): void
    {
        $this->seedImage('barrrr.jpeg', 'about');
        $this->seedImage('espetos.jpg', 'menu', 'menu');
        $this->seedImage('feijao.jpeg', 'specials');
        $this->seedImage('aniversario.jpeg', 'events');
        $this->seedImage('mulher.jpg', 'testimonials', 'testimonials');
        $this->seedImage('chef.jpeg', 'chefs', 'chefs');
        $this->seedImage('img1.jpeg', 'gallery', 'gallery');
    }
}
