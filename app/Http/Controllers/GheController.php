<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Ghe;
use App\Model\LoaiGhe;
use DB;

class GheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ghe = DB::table('ghes')
                ->join('loai_ghes','ghes.Loaighe_id','=','loai_ghes.id')
                ->join('raps','ghes.rap_id','=','raps.id')
                ->orderBy('ghes.id','desc')
                ->paginate(10);
        return view('data.Trang_Ghe.data_ghe',['ghe'=>$ghe]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaighe = DB::table('loai_ghes')->get();
        $rap = DB::table('raps')->get();

        return view('data.Trang_Ghe.them_ghe', ["loaighe"=>$loaighe,
                                                "rap"   =>$rap
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
        $ghe = Ghe::create([
            'Soghe' => $request['Soghe'],
            'Loaighe_id' => $request['Tenloaighe'],
            'rap_id' => $request['Tenrap'], 
            'Trangthai' => $request['Trangthai'],                                                                 
        ]);
        return redirect()->route('ghe.index');
    }
    /**
     * Show the form for editing the specified resource.

     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
         $loaighe = DB::table('loai_ghes')->get();
         $rap     = DB::table('raps')->get();

         $ghe = DB::table('ghes')
                ->join('loai_ghes','ghes.Loaighe_id','=','loai_ghes.id')
                ->join('raps','ghes.rap_id','=','raps.id')
                ->where('ghes.id',"=",$id)
                ->get();

         return view('data.Trang_Ghe.sua_ghe',['ghe'=>$ghe,
                                               "loaighe"=>$loaighe,
                                                "rap" => $rap
                                           ]);
        
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
        $ghe = Ghe::find($id);
        $ghe->Soghe = $request['Soghe'];
        $ghe->Loaighe_id = $request['Tenloaighe'];
        $ghe->rap_id = $request['Tenrap'];
        $ghe->Trangthai = $request['Trangthai'];
        $ghe->save();

        return redirect()->route("ghe.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ghe = Ghe::find($id);
        
        $ghe->delete();
         return redirect()->route("ghe.index");
    }
}
