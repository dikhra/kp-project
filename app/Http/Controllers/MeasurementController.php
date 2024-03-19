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

        $child = new Child;
        $child = $child->where('nik', $request->nik)->first();
        $umurBulan = $measurement->calculateAgeInMonths($request->nik ,$request->tanggal_pengukuran);

        $measurement->nik = $request->nik;
        $measurement->tanggal_pengukuran = $request->tanggal_pengukuran;
        $measurement->berat_badan = $request->berat_badan;
        $measurement->panjang_badan = $request->panjang_badan;
        $measurement->cara_pengukuran = $request->cara_pengukuran;
        $measurement->zs_bb_u = $measurement->hitungZScoreBBU($request->berat_badan, $umurBulan);
        $measurement->bb_u = $measurement->klasifikasiBBU($umurBulan, $measurement->zs_bb_u);
        $measurement->zs_tb_u = $measurement->hitungZScoreTBU($request->panjang_badan, $umurBulan);
        $measurement->tb_u = $measurement->klasifikasiTBU($umurBulan, $measurement->zs_tb_u);
        $measurement->zs_bb_tb = $measurement->hitungZScoreBBTB($request->berat_badan, $request->panjang_badan, $umurBulan);
        $measurement->bb_tb = $measurement->klasifikasiBBTB($umurBulan, $measurement->zs_bb_tb);
        $measurement->lingkar_kepala = $request->lingkar_kepala;
        $measurement->save();

        if ($measurement) {
            return redirect('/pengukuran_anak/' . $request->nik)->with('success', 'Data Pengukuran Berhasil Ditambahkan');
        } else {
            return redirect('/pengukuran_anak/' . $request->nik)->with('error', 'Data Pengukuran Gagal Ditambahkan');
        }
    }

    public function update()
    {
    }


    public function delete($id)
    {
        $measurement = Measurement::find($id);
        $nik = $measurement->nik;
        $measurement->delete();

        if ($measurement) {
            return redirect('/pengukuran_anak/' . $nik)->with('success', 'Data Pengukuran Berhasil Dihapus');
        } else {
            return redirect('/pengukuran_anak/' . $nik)->with('error', 'Data Pengukuran Gagal Dihapus');
        }
    }
}
