<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create an admin user with the role of "admin"
        $admin = User::create([
            'name' => 'John Doe',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'roles' => 1,
        ]);

        // Create a user with the role of "user"
        $user = User::create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'password' => Hash::make('password'),
            'roles' => 0,
        ]);
    }
}