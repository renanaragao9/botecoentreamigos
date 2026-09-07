<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'entreamigos@aragaolabs.com.br'],
            [
                'name' => 'Admin',
                'password' => Hash::make('entre123'),
                'email_verified_at' => now(),
            ]
        );
    }
}
