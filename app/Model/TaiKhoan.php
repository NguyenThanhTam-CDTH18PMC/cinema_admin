<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
class TaiKhoan extends Model
{
    
	use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    protected $fillable = [
		'HoTen',
        'Ten_TK',
		'Matkhau',
		'Email',
		'Ngaysinh',
		'Phai',
		'SDT',
		'Diachi',
        'Admin',
        'Tien_TK'
    ];

    public function binhluans(){
        return $this->hasMany('Model\BinhLuan','taikhoan_id','id');
    }
    public function phanhois(){
        return $this->hasMany('Model\PhanHoi','taikhoan_id','id');
    }
    public function danhsachves(){
        return $this->hasMany('Model\DsVe','taikhoan_id','id');
    }
    public function setMatkhauAttribute($value){
        $this->attributes['Matkhau'] = Crypt::encryptString($value);
    }
    public function getMatkhauAttribute($value)
    {
        try{
            return Crypt::decryptString($value);
        } catch(\Exception $e){
            return $value;
        }
    }
}
