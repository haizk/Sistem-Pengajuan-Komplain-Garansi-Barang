<?php

namespace Database\Seeders;

use App\Models\Riwayat_Tindakan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Riwayat_TindakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Riwayat_Tindakan::factory()
        ->count(10)
        ->create();
    }
}
