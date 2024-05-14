<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userCount = 30;
        User::factory()->count($userCount)->create();
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin2@gmail.com',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => 'admin',
            'remember_token' => Str::random(10),
        ]);
    }
}
