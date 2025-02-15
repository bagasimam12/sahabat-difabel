<?php

namespace App\Http\Controllers;

use App\Models\LayananKeperluanModel;
use Illuminate\Http\Request;

class LayananKeperluanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layananKeperluans = LayananKeperluanModel::all();
        return view('admin.layanan-keperluan', compact('layananKeperluans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        LayananKeperluanModel::updateOrCreate(
            [
                'keperluan_layanan_id' => $request->keperluan_layanan_id
            ],
            [
                'nama' => $request->nama,
                'stock' => $request->stok
            ]
        );

        return redirect(route('layanan-keperluan.index'))->with('success', 'Berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $layananKeperluan = LayananKeperluanModel::find($id);
        return response()->json($layananKeperluan);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        LayananKeperluanModel::find($id)->delete();
        return redirect(route('layanan-keperluan.index'))->with('success', 'Berhasil Menghapus data');
    }
}
