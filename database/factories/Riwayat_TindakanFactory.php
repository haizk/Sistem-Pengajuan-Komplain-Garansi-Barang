<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\Riwayat_Pengajuan_Garansi;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Riwayat_Tindakan>
 */
class Riwayat_TindakanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('id_ID');

        $pengajuanIDs = Riwayat_Pengajuan_Garansi::pluck('id')->toArray();
        $pengajuanID = $faker->randomElement($pengajuanIDs);
        $pengajuan = Riwayat_Pengajuan_Garansi::find($pengajuanID);

        return [
            'laporan' => $faker->paragraph(2),
            'tanggal_tindakan' => $faker->date(),
            'tindakan' => $faker->sentences(),
            'petugas' => $faker->name, 
            'id_pengajuan' => $pengajuan,
        ];
    }
}
