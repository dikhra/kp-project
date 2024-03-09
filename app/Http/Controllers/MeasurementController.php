<?php

namespace App\Http\Controllers;

use App\Models\Measurement;
use Illuminate\Http\Request;

class MeasurementController extends Controller
{
    public function store(Request $request)
    {
        $measurement = new Measurement;
        $measurement->nik = $request->nik;
        $measurement->tanggal_pengukuran = $request->tanggal_pengukuran;
        $measurement->berat_badan = $request->berat_badan;
        $measurement->panjang_badan = $request->panjang_badan;
        $measurement->lingkar_kepala = $request->lingkar_kepala;
        $measurement->cara_pengukuran = $request->cara_pengukuran;
        $measurement->save();

        if ($measurement) {
            return redirect('/pengukuran_anak/' . $request->nik)->with('success', 'Data Pengukuran Berhasil Ditambahkan');
        } else {
            return redirect('/pengukuran_anak/' . $request->nik)->with('error', 'Data Pengukuran Gagal Ditambahkan');
        }
    }
}
