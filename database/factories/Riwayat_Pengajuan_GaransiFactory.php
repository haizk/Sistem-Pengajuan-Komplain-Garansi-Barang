<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\Barang;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Riwayat_Pengajuan_Garansi>
 */
class Riwayat_Pengajuan_GaransiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('id_ID');
        
        $tanggal_pengajuan = $faker->dateTimeBetween('-11 months', '-6 month');
        $tanggal_selesai = $faker->dateTimeBetween('-5 months', '-1 month');

        $barangIDs = Barang::pluck('id')->toArray();
        $adminIDs = User::where('role', 'Admin')->pluck('id')->toArray();
        $pembeliIDs = User::where('role', 'Pembeli')->pluck('id')->toArray();

        $barangID = $faker->randomElement($barangIDs);
        $adminID = $faker->randomElement($adminIDs);
        $pembeliID = $faker->randomElement($pembeliIDs);

        $barang = Barang::find($barangID);
        $admin = User::find($adminID);
        $pembeli = User::find($pembeliID);

        return [
            'pengajuan' => $faker->paragraph(2),
            'tanggal_pengajuan' => $tanggal_pengajuan,
            'tanggal_selesai' => $tanggal_selesai,
            'status' => $faker->randomElement(['diterima', 'diproses', 'selesai']),
            'id_admin' => $admin,
            'id_pembeli' => $pembeli,
            'id_barang' => $barang,
        ];
    }
}
