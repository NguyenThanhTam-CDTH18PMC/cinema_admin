<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhimRequest extends FormRequest
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
            'Hinhanh' => 'bail | required | max:2048',
            'Tenphim' => 'bail | required',
            'Mota' => ' required',
            'Diem' => ' required',
            'theloai' => ' required',
            'DoTuoi' => ' required',
            'Trangthai' => ' required',
            'Dinhdang' => ' required',
            'Daodien' => ' required',
            'dienvien' =>' required',
            'ThoiLuong' => ' required',
            'Trailer' => 'required'
        ];
    }

}
