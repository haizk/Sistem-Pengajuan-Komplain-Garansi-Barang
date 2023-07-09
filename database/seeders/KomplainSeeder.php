<?php

namespace Database\Seeders;

use App\Models\Komplain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KomplainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Komplain::create([
            'tanggal_pembelian' => '2022-04-05',
            'batas_garansi' => '2025-04-05',
            'keluhan' => 'ASIUDCLIAFBCDHSCDBUEARBFLHDSGFIESL',
            'status' => 'Diterima',
            'id_barang' => '1',
            'id_pembeli' => '2',
            'foto' => 'aaa',
        ]);

        Komplain::create([
            'tanggal_pembelian' => '2022-04-06',
            'batas_garansi' => '2024-04-05',
            'keluhan' => 'ASIUDCLIAFBCDHSCDBUEARBFLHDSGFIESL',
            'status' => 'Diproses',
            'id_barang' => '2',
            'id_pembeli' => '3',
            'foto' => 'aaa',
        ]);

        Komplain::create([
            'tanggal_pembelian' => '2022-02-05',
            'batas_garansi' => '2025-06-05',
            'keluhan' => 'ASIUDCLIAFBCDHSCDBUEARBFLHDSGFIESL',
            'status' => 'Selesai',
            'id_barang' => '3',
            'id_pembeli' => '1',
            'foto' => 'aaa',
        ]);
    }
}
