<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create default user for API access token generation
        // It would be a good idea to have an interface to create user to give access to the API

        User::factory()->count(1)->create([
            'email' => 'user@instatracker.com',
            'password' => Hash::make('password'),
            'remember_token' => null,
        ]);
    }
}
