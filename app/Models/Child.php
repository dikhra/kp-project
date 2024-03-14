<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $fillable = [
        "anak_ke",
        "tanggal_lahir",
        "jenis_kelamin",
        "no_kk",
        "nik",
        "nama",
        "berat_badan",
        "panjang_badan",
        "nama_ortu",
        "nik_ortu",
        "no_ortu",
        "alamat_lengkap",
        "rt",
        "rw",
    ];

    protected $dates = ["tanggal_lahir"];

    public function measurement()
    {
        return $this->hasMany(Measurement::class, "nik","nik");
    }
}
