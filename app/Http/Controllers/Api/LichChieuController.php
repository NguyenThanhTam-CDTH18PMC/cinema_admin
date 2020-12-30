<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\LichChieu;
use App\Model\SuatChieu;
use DB;
class LichChieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $SuatChieu = DB::table('suat_chieus')
                ->join('raps','raps.id','=','suat_chieus.rap_id')
                ->join('phims','phims.id','=','suat_chieus.phim_id')
            
                ->select('suat_chieus.id','suat_chieus.GioChieu','raps.Tenrap','suat_chieus.rap_id','suat_chieus.phim_id','phims.Tenphim','raps.chinhanh','suat_chieus.NgayChieu')
                ->get();
        return response()->json($SuatChieu, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
