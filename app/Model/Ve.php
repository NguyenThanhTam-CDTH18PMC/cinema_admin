<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Ve extends Model
{
   
	use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    protected $fillable = [
		'dsve_id',
        'ghe_id',
        'suatchieu_id',
        'phim_id',
        'NgayChieu',
		'Thanhtien'
    ];

    protected function danhsachve(){
    	$this->belongsTo('Model\DsVe','dsve_id');
    }

    protected function suatchieu(){
    	$this->belongsTo('Model\SuatChieu','dsve_id');
    }

    protected function phim(){
   		$this->belongsTo('Model\Phim','phim_id');
    }

    protected function ghe(){
        $this->belongsTo('Model\Ghe','ghe_id');
    }
}
