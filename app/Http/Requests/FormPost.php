<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormPost extends FormRequest
{
    // Cấp quyền cho user sữ dụng request này
    public function authorize()
    {
        return true;
    }

    // Các ràng buộc khi nhập dữ liệu vào. Hàm trả về 1 mảng các ràng buộc
    public function rules()
    {
        return [
            'Tendaodien' => 'bail | required | alpha | min:5',
            //'Tendienvien' => 'bail | required | alpha | min:5',

            'Ngaysinh' => 'required | date',
            "Gioitinh" => 'nullable'
        ];
    }

    // Tùy chỉnh lại thông báo lỗi
    public function Message()
    {
        return [
            'Tendaodien.required' => "Tên đạo diễn không được để trống !",
            'Tendaodien.alpha' => "Tên đạo diễn là chữ cái !",
            'Tendaodien.min' => "Tên đạo diễn có ít nhất 5 kí tự !"
        ];
    }
}
