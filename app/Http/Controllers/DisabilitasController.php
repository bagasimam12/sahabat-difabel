<?php

namespace App\Http\Controllers;

use App\Exports\DifabelExport;
use App\Models\DisabilitasModel;
use App\Models\JenisDisabilitasModel;
use App\Models\KeperluanDisabilitasModel;
use App\Models\LayananKeperluanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Facades\Excel;

class DisabilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function getView()
    {
        $jenisDisabilitas = JenisDisabilitasModel::all();
        $keperluanLayanan = LayananKeperluanModel::all();

        return view('admin.disabilitas', compact('jenisDisabilitas', 'keperluanLayanan'));
    }

    public function exportExcel()
    {
        return Excel::download(new DifabelExport, 'difabel.xlsx');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatusKeperluan(Request $request, string $id)
    {
        request()->validate([
            'status_diterima' => 'required',
        ]);

        $disabilitas = KeperluanDisabilitasModel::find($id);
        $disabilitas->status_diterima = $request->status_diterima;
        $disabilitas->save();

        return response()->json(['status' => "success"]);
    }

    public function index()
    {
        $userLogin = Auth::user();
        $disabilitas = DisabilitasModel::leftJoin('keperluan_disabilitas as kd', 'disabilitas.disabilitas_id', '=', 'kd.disabilitas_id')
            ->leftJoin('keperluan_layanan as kl', 'kd.keperluan_layanan_id', '=', 'kl.keperluan_layanan_id')
            ->select('disabilitas.*', DB::raw("GROUP_CONCAT(kl.nama SEPARATOR ', ') as keperluan_disabilitas_list, CONCAT(disabilitas.tempat_lahir, ', ', disabilitas.tanggal_lahir) AS ttl"))
            ->with('jenisDisabilitas')
            ->groupBy('disabilitas.disabilitas_id');

        return DataTables::of($disabilitas)
            ->addColumn('action', function ($disabilitas) use ($userLogin) {
                if ($userLogin->role == 'admin') {
                    $onclickShow = 'onclick="showDisabilitas(' . $disabilitas->disabilitas_id . ')"';
                } else {
                    $onclickShow = 'onclick="kelolaLayananDisabilitas(' . $disabilitas->disabilitas_id . ')"';
                }

                $showBtn =  '<button ' .
                    ' class="btn btn-success btn-sm" ' .
                    'style="margin: 0px 10px 0px;"' . $onclickShow . '>' .
                    '<i class="bi bi-folder"></i>' .
                    '</button> ';

                $editBtn =  '<button class="btn btn-primary btn-sm"' .
                    'style="margin-right: 10px;" onclick="editDisabilitas(' . $disabilitas->disabilitas_id . ')">' .
                    '<i class="bi bi-pen"></i></button>';

                $deleteBtn =  '<button ' .
                    ' class="btn btn-danger btn-sm" ' .
                    ' onclick="destroyDisabilitas(' . $disabilitas->disabilitas_id . ')"><i class="bi bi-trash"></i>' .
                    '</button> ';

                return $showBtn . $editBtn . $deleteBtn;
            })
            ->rawColumns(
                [
                    'action',
                ]
            )
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'nama_lengkap' => 'required|max:255',
            'jenis_kelamin' => 'required',
        ]);

        $disabilitas = new DisabilitasModel();
        $disabilitas->nama_lengkap = $request->nama_lengkap;
        $disabilitas->jenis_kelamin = $request->jenis_kelamin;
        $disabilitas->tanggal_lahir = $request->tanggal_lahir;
        $disabilitas->tempat_lahir = $request->tempat_lahir;
        $disabilitas->alamat = $request->alamat;
        $disabilitas->jenis_disabilitas_id = $request->jenis_disabilitas_id;
        $disabilitas->pekerjaan = $request->pekerjaan;
        $disabilitas->save();
        return response()->json(['status' => "success"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $disabilitas = DisabilitasModel::with('jenisDisabilitas')->find($id);
        $roleUserLogin = Auth::user()->role;
        if ($disabilitas) {
            $disabilitasData = [
                'disabilitas_id' => $disabilitas->disabilitas_id,
                'nama_lengkap' => $disabilitas->nama_lengkap,
                'jenis_kelamin' => $disabilitas->jenis_kelamin,
                'ttl' => $disabilitas->tempat_lahir . ', ' . $disabilitas->tanggal_lahir,
                'alamat' => $disabilitas->alamat,
                'jenis_disabilitas' => $disabilitas->jenisDisabilitas->nama,
                'pekerjaan' => $disabilitas->pekerjaan,
            ];
        } else {
            $disabilitasData = [];
        }

        $kebetuhanLayanan = KeperluanDisabilitasModel::where('disabilitas_id', $id)
            ->get()->map(function ($jenis) {
                switch ($jenis->status_diterima) {
                    case 0:
                        $status = 'Diajukan';
                        break;
                    case 1:
                        $status = 'Diterima';
                        break;
                    case 2:
                        $status = 'Ditolak';
                        break;
                    default:
                        $status = '-';
                        break;
                }
                return [
                    'keperluan_disabilitas_id' => $jenis->keperluan_disabilitas_id,
                    'keperluan' => $jenis->keperluanLayanan->nama,
                    'status_diterima' => $status,
                ];
            })->toArray();

        return response()->json(['disabilitas' => $disabilitasData, 'kebutuhan' => $kebetuhanLayanan, 'roleLogin' => $roleUserLogin]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'nama_lengkap' => 'required|max:255',
            'jenis_kelamin' => 'required',
        ]);

        $disabilitas = DisabilitasModel::find($id);
        $disabilitas->nama_lengkap = $request->nama_lengkap;
        $disabilitas->jenis_kelamin = $request->jenis_kelamin;
        $disabilitas->tanggal_lahir = $request->tanggal_lahir;
        $disabilitas->tempat_lahir = $request->tempat_lahir;
        $disabilitas->alamat = $request->alamat;
        $disabilitas->jenis_disabilitas_id = $request->jenis_disabilitas_id;
        $disabilitas->pekerjaan = $request->pekerjaan;
        $disabilitas->save();
        return response()->json(['status' => "success"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DisabilitasModel::destroy($id);
        KeperluanDisabilitasModel::where('disabilitas_id', $id)->destroy();

        return response()->json(['status' => "success"]);
    }
}
