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
        Riwayat_Pengajuan_Garansi::factory()
            ->count(10)
            ->create();
    }
}
