<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;
use App\Models\Measurement;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin/dashboard");
    }

    public function tambah_anak()
    {
        return view("admin.tambah_anak");
    }


    public function cari_anak()
    {
        return view('admin/cari_anak');
    }

    public function daftar_anak()
    {
        return view('admin.daftar_anak', [
            "children" => Child::all()
        ]);
    }

    public function pengukuran_anak($nik)
    {

        $childAge = (new ChildController)->getAgeNow($nik);

        return view('admin.pengukuran_anak', [
            "child" => Child::where('nik', $nik)->first(),
            "childAge" => $childAge,
            "measurements" => Measurement::where('nik', $nik)->get()
        ]);
    }

    public function perkembangan_anak($nik)
    {
        return view('admin.perkembangan_anak', [
            "child" => Child::where('nik', $nik)->first(),
        ]);
    }
}
