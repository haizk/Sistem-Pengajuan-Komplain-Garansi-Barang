<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'Admin',
        ]);

        User::create([
            'name' => 'administrator',
            'email' => 'administrator@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'Administrator',
        ]);

        User::create([
            'name' => 'manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'Manager',
        ]);

        User::create([
            'name' => 'pembeli',
            'email' => 'pembeli@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'Pembeli',
        ]);

    }
}
