<?php

    namespace App\Model;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class SuatChieu extends Model
    {
        
    	use SoftDeletes;

        protected $dates = ['deleted_at'];

        protected $fillable = [
            'GioChieu'
        ];

        protected function lichchieu()
    	{
    		$this->hasMany('Model\LichChieu','suatchieu_id','id');
        }
        protected function ve()
    	{
    		$this->hasMany('Model\Ve','suatchieu_id','id');
    	}
    }
