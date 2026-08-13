<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminUserSeeder::class);
        $this->call(AboutSectionSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(SpecialSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(ChefSeeder::class);
        $this->call(ContactInfoSeeder::class);
    }
}
