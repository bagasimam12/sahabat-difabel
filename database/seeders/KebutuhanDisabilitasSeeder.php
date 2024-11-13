<?php

namespace Database\Seeders;

use App\Models\DisabilitasModel;
use App\Models\KeperluanDisabilitasModel;
use App\Models\LayananKeperluanModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Ramsey\Uuid\Uuid;

class KebutuhanDisabilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $disabilitas = DisabilitasModel::get();
        $jmlKebutuhan = LayananKeperluanModel::count();
        $faker = Faker::create('id_ID');

        foreach ($disabilitas as $key => $value) {
            $randomJmlKebutuhan = $faker->numberBetween(1, $jmlKebutuhan);
            $kebutuhan = LayananKeperluanModel::limit($randomJmlKebutuhan)->get();
            foreach ($kebutuhan as $item) {
                $kebutuhanDifabel = new KeperluanDisabilitasModel();
                $kebutuhanDifabel->disabilitas_id = $value->disabilitas_id;
                $kebutuhanDifabel->keperluan_layanan_id = $item->keperluan_layanan_id;
                $kebutuhanDifabel->status_diterima = $faker->numberBetween(0, 2);
                $kebutuhanDifabel->save();
            }
        }
    }
}
