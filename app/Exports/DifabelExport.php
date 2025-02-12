<?php

namespace App\Exports;

use App\Models\DisabilitasModel;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;

class DifabelExport implements FromView
{
    public function view(): View
    {
        $disabilitas = DisabilitasModel::leftJoin('keperluan_disabilitas as kd', 'disabilitas.disabilitas_id', '=', 'kd.disabilitas_id')
            ->leftJoin('keperluan_layanan as kl', 'kd.keperluan_layanan_id', '=', 'kl.keperluan_layanan_id')
            ->leftJoin('jenis_disabilitas as jd', 'disabilitas.jenis_disabilitas_id', '=', 'jd.jenis_disabilitas_id')
            ->select('disabilitas.disabilitas_id', 'disabilitas.nama_lengkap', 'disabilitas.jenis_kelamin', 'disabilitas.tanggal_lahir', 'disabilitas.tempat_lahir', 'disabilitas.alamat', 'disabilitas.jenis_disabilitas_id', 'disabilitas.pekerjaan', 'jd.nama AS nama_jenis_disabilitas', DB::raw("GROUP_CONCAT(kl.nama SEPARATOR ', ') as keperluan_disabilitas_list"))
        ->groupBy('disabilitas.disabilitas_id', 'disabilitas.nama_lengkap', 'disabilitas.jenis_kelamin', 'disabilitas.tanggal_lahir', 'disabilitas.tempat_lahir', 'disabilitas.alamat', 'disabilitas.jenis_disabilitas_id', 'disabilitas.pekerjaan', 'jd.nama')
        ->get();

        return view('exports.difabel', [
            'difabel' => $disabilitas
        ]);
    }
}
