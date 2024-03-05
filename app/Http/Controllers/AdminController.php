<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function daftar_anak()
    {
        return view("admin/daftar_anak");
    }
}
