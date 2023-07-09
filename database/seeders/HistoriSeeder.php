<?php

namespace Database\Seeders;

use App\Models\Histori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Histori::create([
            'tindakan' => 'sDNC>s>BChlsjd',
            'tanggal_tindakan' => '2023-05-06',
            'id_komplain' => '1',
            'id_petugas' => '1'
        ]);

        Histori::create([
            'tindakan' => 'sDNC>s>BChlsjd',
            'tanggal_tindakan' => '2023-05-06',
            'id_komplain' => '2',
            'id_petugas' => '2'
        ]);

        Histori::create([
            'tindakan' => 'sDNC>s>BChlsjd',
            'tanggal_tindakan' => '2023-05-06',
            'id_komplain' => '3',
            'id_petugas' => '3'
        ]);
    }
}
