<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('id_ID');
        
        $pembeliIDs = User::where('role', 'Pembeli')->pluck('id')->toArray();
        $pembeliID = $faker->randomElement($pembeliIDs);
        $pembeli = User::find($pembeliID);

        return [
            'nama' => $faker->word,
            'no_seri' => $faker->randomNumber(8, true),
            'jenis' => $faker->word,
            'harga' => $faker->randomFloat(1,10,100),
            'jumlah' => $faker->numberBetween(1, 100),
            'merk' => $faker->word,
            'tanggal_pembelian' => $faker->date('Y-m-d'),
            'batas_garansi' => $faker->date('Y-m-d'),
            'struk' => $faker->fileExtension(),
            'id_pembeli' => $pembeli,
        ];
    }
}
