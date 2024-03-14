<?php

namespace App\Http\Controllers;

use App\Models\Measurement;
use App\Models\Child;
use Illuminate\Http\Request;

class MeasurementController extends Controller
{
    public function store(Request $request)
    {
        $measurement = new Measurement;

        $child = Child::find($request->id);
        $umurBulan = $measurement->calculateAgeInMonths($request->tanggal_pengukuran);

        $measurement->nik = $request->nik;
        $measurement->tanggal_pengukuran = $request->tanggal_pengukuran;
        $measurement->berat_badan = $request->berat_badan;
        $measurement->panjang_badan = $request->panjang_badan;
        $measurement->cara_pengukuran = $request->cara_pengukuran;
        $measurement->bb_u = $measurement->klasifikasiBBU($umurBulan, $measurement->zs_bb_u);
        $measurement->zs_bb_u = $measurement->hitungZScoreBBU($request->berat_badan, $umurBulan);
        $measurement->tb_u = $measurement->klasifikasiTBU($umurBulan, $measurement->zs_tb_u);
        $measurement->zs_tb_u = $measurement->hitungZScoreTBU($request->tinggi_badan, $umurBulan);
        $measurement->lingkar_kepala = $request->lingkar_kepala;
        $measurement->save();

        if ($measurement) {
            return redirect('/pengukuran_anak/' . $request->nik)->with('success', 'Data Pengukuran Berhasil Ditambahkan');
        } else {
            return redirect('/pengukuran_anak/' . $request->nik)->with('error', 'Data Pengukuran Gagal Ditambahkan');
        }
    }
}
