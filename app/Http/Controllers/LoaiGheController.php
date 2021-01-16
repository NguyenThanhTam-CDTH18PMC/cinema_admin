<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\LoaiGhe;
use DB;

class LoaiGheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaighe = DB::table('loai_ghes')
                ->join('gias','loai_ghes.gia_id','=','gias.id')
                ->get();
        return view('data.Trang_LoaiGhe.data_loaighe',['loaighe'=>$loaighe]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ds_gia = DB::table('gias')->get();
        return view('data.Trang_LoaiGhe.them_loaighe', ['ds_gia'=>$ds_gia]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $loaighe = LoaiGhe::create([
            'Tenloaighe' => $request['Tenloaighe'],
            'Gia_id' => $request['gia']                                                                     
        ]);
        return redirect()->route('loaighe.index');
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
         $loaighe = DB::table('loai_ghes')
                 ->join('gias','loai_ghes.gia_id','=','gias.id')
                 ->select('loai_ghes.id','loai_ghes.Tenloaighe','loai_ghes.Gia_id', 'gias.giatien')
                ->where('loai_ghes.id','=',$id)
                 ->get();
         return view('data.Trang_LoaiGhe.sua_loaighe',['loaighe'=>$loaighe,'ds_gia'=>$ds_gia]);
        
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
        $loaighe = LoaiGhe::find($id);
        $loaighe->Tenloaighe = $request['Tenloaighe'];
        $loaighe->gia_id = $request['gia'];
        $loaighe->save();

        return redirect()->route("loaighe.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loaighe = LoaiGhe::find($id);
        
        $loaighe->delete();
         return redirect()->route("loaighe.index");
    }
}
