<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisDisabilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_disabilitas')->insert(
            [
                'nama' => 'Gangguan Penglihatan'
            ]
        );

        DB::table('jenis_disabilitas')->insert(
            [
                'nama' => 'Gangguan Pendengaran'
            ]
        );

        DB::table('jenis_disabilitas')->insert(
            [
                'nama' => 'Autisme'
            ]
        );

        DB::table('jenis_disabilitas')->insert(
            [
                'nama' => 'Disabilitas Fisik'
            ]
        );
    }
}
