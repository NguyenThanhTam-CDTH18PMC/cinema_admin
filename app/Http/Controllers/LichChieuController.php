<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\LichChieu;
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
        $lichchieu = LichChieu::paginate(10);
        return view('data.Trang_LichChieuPhim.data_lichchieu',['lichchieu'=>$lichchieu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.Trang_LichChieuPhim.them_lichchieu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vali_lichchieu = $request->validate([
            'phim_id' => $request['phim_id'],
            'rap_id' => $request['rap_id'],
            'thgian_batdau' => $request['thgian_batdau'],
            'thgian_ketthuc' => $request['thgian_ketthuc'],
        ]);
        $lichchieu = LichChieu::create($vali_lichchieu);
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
