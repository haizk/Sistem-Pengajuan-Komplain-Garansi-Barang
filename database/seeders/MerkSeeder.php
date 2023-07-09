<?php

namespace Database\Seeders;

use App\Models\Merk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Merk::create([
            'nama' => 'Panasonic'
        ]);

        Merk::create([
            'nama' => 'LG'
        ]);

        Merk::create([
            'nama' => 'Acer'
        ]);
    }
}
