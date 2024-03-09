<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_pengukuran',
        'berat_badan',
        'panjang_badan',
        'lingkar_kepala',
        'cara_pengukuran',
    ];

    protected $dates = ['tanggal_pengukuran'];

    public function child()
    {
        return $this->belongsTo(Child::class, 'nik');
    }

    public function calculateBBU()
    {
        $berat = $this->berat_badan;

    }
}
