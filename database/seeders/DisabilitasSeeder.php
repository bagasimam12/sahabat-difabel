<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DisabilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            DB::table('disabilitas')->insert([
                'nama_lengkap' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['L', 'P']),
                'tanggal_lahir' => $faker->date('Y_m_d'),
                'tempat_lahir' => $faker->city(),
                'alamat' => $faker->address,
                'jenis_disabilitas_id' => $faker->numberBetween(1, 4),
                'pekerjaan' => $faker->jobTitle()
            ]);
        }
    }
}
