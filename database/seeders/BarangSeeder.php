<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            'nama' => 'Panasonic',
            'harga' => '300000',
            'id_merk' => '1'
        ]);

        Barang::create([
            'nama' => 'Panasonic',
            'harga' => '300000',
            'id_merk' => '2'
        ]);

        Barang::create([
            'nama' => 'Panasonic',
            'harga' => '300000',
            'id_merk' => '3'
        ]);
    }
}
