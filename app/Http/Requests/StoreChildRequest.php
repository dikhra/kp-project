<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChildRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "anak_ke" => "required|numeric",
            "tanggal_lahir" => "required|date",
            "jenis_kelamin" => "required|in:Laki-laki,Perempuan",
            "no_kk" => "required|numeric",
            "nik" => "required|numeric",
            "nama" => "required",
            "berat_badan" => "required|numeric",
            "panjang_badan" => "required|numeric",
            "nama_ortu" => "required",
            "nik_ortu" => "required|numeric",
            "no_ortu" => "required|numeric",
            "alamat_lengkap" => "required",
            "rt" => "numeric",
            "rw" => "numeric",
        ];
    }
}
