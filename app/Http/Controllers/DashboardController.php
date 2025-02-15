<?php

namespace App\Http\Controllers;

use App\Models\DisabilitasModel;
use App\Models\JenisDisabilitasModel;
use App\Models\LayananKeperluanModel;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jmlUser = User::count();
        $jmlDisabilitas = DisabilitasModel::count();
        $jmlLayanan = LayananKeperluanModel::count();
        $disabilitas = DisabilitasModel::query()
            ->with('keperluanDisabilitas')
            ->orderByDesc('created_at')->limit(5)->get();

        // Menambahkan logika untuk menentukan status
        foreach ($disabilitas as $key => $item) {
            $statusCount = [
                'disetujui' => 0,
                'ditolak' => 0,
                'diajukan' => 0,
            ];

            foreach ($item->keperluanDisabilitas as $keperluan) {
                if ($keperluan->status_diterima === 1) {
                    $statusCount['disetujui']++;
                } elseif ($keperluan->status_diterima === 0) {
                    $statusCount['diajukan']++;
                } elseif ($keperluan->status_diterima === 2) {
                    $statusCount['ditolak']++;
                }
            }
            // if ($key === 4) {
            //     dd($statusCount);
            // }

            // Menentukan status akhir
            if (count($item->keperluanDisabilitas) === 0) {
                $status = 'Belum Ada Pengajuan';
            } elseif ($statusCount['disetujui'] === count($item->keperluanDisabilitas)) {
                $status = 'Disetujui Semua';
            } elseif ($statusCount['diajukan'] === count($item->keperluanDisabilitas)) {
                $status = 'Diajukan';
            } elseif ($statusCount['disetujui'] > $statusCount['ditolak']) {
                $status = 'Disetujui Sebagian';
            } elseif ($statusCount['ditolak'] === count($item->keperluanDisabilitas)) {
                $status = 'Ditolak Semua';
            } else {
                $status = 'Ditolak Sebagian';
            }

            $item->status = $status;
        }


        return view('admin.dashboard', compact('jmlUser', 'jmlDisabilitas', 'jmlLayanan', 'disabilitas'));
    }

    public function getJenisDisabilitas()
    {
        $jenisDisabilitas = DisabilitasModel::query()
            ->selectRaw("jenis_disabilitas_id, COUNT(*) as jmlh")
            ->with('jenisDisabilitas')
            ->groupBy('jenis_disabilitas_id')->get()
            ->map(function ($jenis) {
                return [
                    'value' => $jenis->jmlh,
                    'name' => $jenis->jenisDisabilitas->nama,
                ];
            })->toArray();

        return response($jenisDisabilitas);
    }
}
