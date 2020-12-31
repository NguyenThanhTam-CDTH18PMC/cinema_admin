<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DinhDang;
use DB;

class DinhDangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dinhdang = DB::table('dinh_dangs')
                ->join('gias','dinh_dangs.gia_id','=','gias.id')
                ->get();
        return view('data.Trang_DinhDangPhim.data_dinhdangphim',['dinhdang'=>$dinhdang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_gia = DB::table('gias')->get();
        return view('data.Trang_DinhDangPhim.them_dinhdangphim', ['ds_gia'=>$ds_gia]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $dinhdang = DinhDang::create([
            'Loaidinhdang' => $request['loaidinhdang'],
            'Gia_id' => $request['gia']                                                                     
        ]);
        return redirect()->route('dinhdang.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $ds_gia = DB::table('gias')->get();
         $dinhdang = DB::table('dinh_dangs')
                 ->join('gias','dinh_dangs.gia_id','=','gias.id')
                 ->select('dinh_dangs.id','dinh_dangs.Loaidinhdang','dinh_dangs.Gia_id', 'gias.giatien')
                ->where('dinh_dangs.id','=',$id)
                 ->get();
         return view('data.Trang_DinhDangPhim.sua_dinhdangphim',['dinhdang'=>$dinhdang,
                           'ds_gia'=>$ds_gia]);
        
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
        $dinhdang = DinhDang::find($id);
        $dinhdang->Loaidinhdang = $request['loaidinhdang'];
        $dinhdang->gia_id = $request['gia'];
        $dinhdang->save();

        return redirect()->route("dinhdang.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dinhdang = DinhDang::find($id);
        
        $dinhdang->delete();
         return redirect()->route("dinhdang.index");
    }
}
