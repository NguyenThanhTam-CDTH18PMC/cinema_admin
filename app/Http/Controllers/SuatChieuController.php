<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SuatChieu;
use App\Http\Requests\FormPost;
use Session;

class SuatChieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suatchieu = SuatChieu::paginate(10);
        return view('data.Trang_SuatChieu.data_suatchieu',['suatchieu'=>$suatchieu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.Trang_SuatChieu.them_suatchieu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vali_suatchieu = $request->validate([
            'GioChieu' => $request['GioChieu'],
            'phim_id' => $request['phim_id'],
            'rap_id' => $request['rap_id'],
        ]);
        $suatchieu = SuatChieu::create($vali_suatchieu);
        return redirect()->route('suatchieu.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suatchieu = SuatChieu::find($id);
        return view("data.Trang_SuatChieu.sua_suatchieu",['suatchieu'=>$suatchieu]);
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
        $vali_suatchieu = $request->validate([
            'GioChieu' => $request['GioChieu'],
            'phim_id' => $request['phim_id'],
            'rap_id' => $request['rap_id'],
        ]);
        $suatchieu = SuatChieu::find($id);
        $suatchieu->GioChieu = $request->GioChieu;
        $suatchieu->phim_id = $request->phim_id;
        $suatchieu->rap_id = $request->rap_id;
        $suatchieu->save();
        return redirect()->route("suatchieu.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suatchieu = SuatChieu::find($id);
        $suatchieu->delete();
        return redirect('suatchieu');
    }
}
