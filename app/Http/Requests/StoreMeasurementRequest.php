<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMeasurementRequest extends FormRequest
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
            "tanggal_pengukuran" => "required|date",
            "berat_badan" => "required|numeric",
            "panjang_badan" => "required|numeric",
            "lingkar_kepala" => "numeric",
            "cara_pengukuran" => "required|in:Diukur dengan meteran,Diukur dengan timbangan",
        ];
    }
}
