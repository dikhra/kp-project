<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin/dashboard");
    }

    public function tambah_anak()
    {
        return view("admin/tambah_anak");
    }

    public function daftar_anak(){
        return view('admin/daftar_anak', [
            "children" => Child::all()
        ]);
    }

    public function cari_anak(){
        return view('admin/cari_anak');
    }
}
