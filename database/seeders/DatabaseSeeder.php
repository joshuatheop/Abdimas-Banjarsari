<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@banjarsari.com',
            'password' => bcrypt('admin12345'), // Use bcrypt for password hashing
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'AdminProduk',
            'email' => 'admin2@banjarsari.com',
            'password' => bcrypt('admin12345'), // Use bcrypt for password hashing
            'role' => 'user',
        ]);
    }
}
