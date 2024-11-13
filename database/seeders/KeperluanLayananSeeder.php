<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeperluanLayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('keperluan_layanan')->insert(
            [
                'nama' => 'Kursi Roda'
            ],
            [
                'nama' => 'Alat Bantu Dengar'
            ],
            [
                'nama' => 'Tongkat Putih / Alat Bantu Navigasi'
            ],
            [
                'nama' => 'Tempat Tidur Khusus'
            ],
            [
                'nama' => 'Alat Komunikasi (AAC)'
            ]
        );
    }
}
