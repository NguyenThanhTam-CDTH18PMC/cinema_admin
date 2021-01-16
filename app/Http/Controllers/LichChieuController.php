<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\LichChieu;
use DB;
use App\Http\Requests\FormPost;
use Session;

class LichChieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $lichchieu = DB::table('lich_chieus')
                ->join('phims','lich_chieus.phim_id','=','phims.id')
                ->join('suat_chieus','lich_chieus.suatchieu_id','=','suat_chieus.id')
                ->join('raps','lich_chieus.rap_id','=','raps.id')
                ->get();

        return view('data.Trang_LichChieuPhim.data_lichchieu',['lichchieu'=>$lichchieu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $phim = DB::table('phims')->get();
        $rap = DB::table('raps')->get();
        $suatchieu = DB::table('suat_chieus')->get();

        return view('data.Trang_LichChieuPhim.them_lichchieu', ["phim"=>$phim,
                                                                "rap"   =>$rap,
                                                                "suatchieu"=>$suatchieu
                                                ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lichchieu = LichChieu::create([
            'Tenphim' => $request['Tenphim'],
            'Tenrap' => $request['Tenrap'],
            'GioChieu' => $request['GioChieu'], 
            'NgayChieu' => $request['NgayChieu'],                                                                 
        ]);
        return redirect()->route('lichchieu.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lichchieu = LichChieu::find($id);
        return view("data.Trang_LichChieuPhim.sua_lichchieu",['lichchieu'=>$lichchieu]);
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
        $vali_lichchieu = $request->validate([
            'phim_id' => $request['phim_id'],
            'rap_id' => $request['rap_id'],
            'thgian_batdau' => $request['thgian_batdau'],
            'thgian_ketthuc' => $request['thgian_ketthuc'],
        ]);
        $lichchieu = LichChieu::find($id);
        $lichchieu->phim_id = $request->phim_id;
        $lichchieu->rap_id = $request->rap_id;
        $lichchieu->thgian_batdau = $request->thgian_batdau;
        $lichchieu->thgian_ketthuc = $request->thgian_ketthuc;
        $lichchieu->save();
        return redirect()->route("lichchieu.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lichchieu = LichChieu::find($id);
        $lichchieu->delete();
        return redirect('lichchieu');
    }
}
