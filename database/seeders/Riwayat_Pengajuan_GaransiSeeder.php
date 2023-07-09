<?php

namespace Database\Seeders;

use App\Models\Riwayat_Pengajuan_Garansi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Riwayat_Pengajuan_GaransiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Riwayat_Pengajuan_Garansi::create([
            'pengajuan' => 'ASFSADGDSDSNCSCJOSAFBKDSHJCSABKGVJSHCVLSJDA',
            'tanggal_pengajuan' => '2022-04-03',
            'tanggal_selesai' => '2022-06-03',
            'status' => 'Selesai',
            'id_admin' => '3',
            'id_pembeli' => '7',
            'id_barang' => '1'
        ]);

        Riwayat_Pengajuan_Garansi::create([
            'pengajuan' => 'ASFSADGDSDSNCSCJOSAFBKDSHJCSABKGVJSHCVLSJDA',
            'tanggal_pengajuan' => '2022-05-03',
            'tanggal_selesai' => '2022-07-08',
            'status' => 'Diproses',
            'id_admin' => '6',
            'id_pembeli' => '1',
            'id_barang' => '3'
        ]);

        Riwayat_Pengajuan_Garansi::create([
            'pengajuan' => 'ASFSADGDSDSNCSCJOSAFBKDSHJCSABKGVJSHCVLSJDA',
            'tanggal_pengajuan' => '2022-01-03',
            'tanggal_selesai' => '2022-07-07',
            'status' => 'Selesai',
            'id_admin' => '9',
            'id_pembeli' => '4',
            'id_barang' => '7'
        ]);
    }
}
