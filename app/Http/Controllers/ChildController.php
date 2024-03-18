<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;
use Carbon\Carbon;

class ChildController extends Controller
{
    public function store(Request $request)
    {
        $child = new Child;
        $child->anak_ke = $request->anak_ke;
        $child->tanggal_lahir = $request->tanggal_lahir;
        $child->jenis_kelamin = $request->jenis_kelamin;
        $child->no_kk = $request->no_kk;
        $child->nik = $request->nik;
        $child->nama = $request->nama;
        $child->berat_badan = $request->berat_badan;
        $child->panjang_badan = $request->panjang_badan;
        $child->nama_ortu = $request->nama_ortu;
        $child->nik_ortu = $request->nik_ortu;
        $child->no_ortu = $request->no_ortu;
        $child->alamat_lengkap = $request->alamat_lengkap;
        $child->rt = $request->rt;
        $child->rw = $request->rw;
        $child->save();

        if ($child) {
            return redirect('/daftar_anak')->with('success', 'Data Anak Berhasil Ditambahkan');
        } else {
            return redirect('/tambah_anak')->with('error', 'Data Anak Gagal Ditambahkan');
        }
    }


    public function getAgeNow($nik)
    {
        $child = Child::where('nik', $nik)->first();

        $tanggal_lahir = Carbon::parse($child->tanggal_lahir);
        $umur = $tanggal_lahir->diffInYears(Carbon::now());
        $bulan = $tanggal_lahir->diff(Carbon::now())->m;
        $hari = $tanggal_lahir->diff(Carbon::now())->d;

        return $umur . " tahun " . $bulan . " bulan " . $hari . " hari";
    }



    public function update()
    {
    }

    public function destroy()
    {
    }

    public function delete($nik)
    {
        $child = Child::where('nik', $nik)->first();

        if ($child) {
            $child->delete();
            return redirect('/daftar_anak')->with('success', 'Data Anak Berhasil Dihapus');
        } else {
            return redirect('/daftar_anak')->with('error', 'Data Anak Gagal Dihapus');
        }
    }
}
