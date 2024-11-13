<?php

namespace App\Http\Controllers;

use App\Models\KeperluanDisabilitasModel;
use Illuminate\Http\Request;

class kebutuhanDifabelController extends Controller
{

    public function show(string $id)
    {
        $disabilitas = KeperluanDisabilitasModel::find($id);
        return response()->json(['kebutuhanDifabel' => $disabilitas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'keperluan_layanan_id' => 'required',
            'disabilitas_id' => 'required',
        ]);

        $disabilitas = new KeperluanDisabilitasModel();
        $disabilitas->keperluan_layanan_id = $request->keperluan_layanan_id;
        $disabilitas->disabilitas_id = $request->disabilitas_id;
        $disabilitas->save();

        return response()->json([
            'status' => 'success',
            'disabilitas_id' => $disabilitas->disabilitas_id
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $disabilitas = KeperluanDisabilitasModel::find($id);

        KeperluanDisabilitasModel::destroy($id);
        return response()->json([
            'status' => 'success',
            'disabilitas_id' => $disabilitas->disabilitas_id
        ]);
    }
}
