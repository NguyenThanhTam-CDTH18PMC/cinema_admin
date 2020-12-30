<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiGhe extends Model
{
    
	use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    protected $fillable = [
    	'Tenloaighe',
		'gia_id'
    ];

    protected function gia()
	{
		$this->belongsTo('Model\Gia','gia_id');
	}

	protected function ghe()
	{
		$this->hasMany('Model\Ghe','Loaighe_id','id');
	}
}
