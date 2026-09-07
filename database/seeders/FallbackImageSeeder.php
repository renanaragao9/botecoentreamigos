<?php

namespace Database\Seeders;

use Database\Seeders\Concerns\SeedImages;
use Illuminate\Database\Seeder;

class FallbackImageSeeder extends Seeder
{
    use SeedImages;

    public function run(): void
    {
        $this->seedImage('espetos.jpg', 'menu', 'menu');
    }
}
