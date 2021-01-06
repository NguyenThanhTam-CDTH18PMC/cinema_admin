<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LichChieu extends Model
{
    
	use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    protected $fillable = [
		'phim_id',
        'rap_id',
		'suatchieu_id',
		'NgayChieu'
    ];

    protected function phim()
	{
		$this->belongsTo('Model\Phim','phim_id');
	}
	protected function rap()
	{
		$this->belongsTo('Model\Rap','rap_id');
    }
    protected function suatchieu()
	{
		$this->belongsTo('Model\SuatChieu','suatchieu_id');
	}
}
