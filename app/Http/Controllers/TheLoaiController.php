<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TheLoai;

class TheLoaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theloai = TheLoai::paginate(10);
        return view('data.Trang_TheLoaiPhim.data_theloaiphim',['theloai'=>$theloai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.Trang_TheLoaiPhim.them_theloaiphim');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vali_theloai = $request->validate([
            "Tentheloai" => 'required | min: 5 | alpha'
        ]);
        $theloai = TheLoai::create([$vali_theloai]);
        return redirect()->route('theloai.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $theloai = TheLoai::find($id);
        return view('data.Trang_TheLoaiPhim.sua_theloaiphim',['theloai'=>$theloai]);
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
        $theloai = TheLoai::find($id);
        $theloai->Tentheloai = $request['tentheloai'];
        $theloai->save();

        return redirect()->route("theloai.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theloai = TheLoai::find($id);
        $theloai->delete();
        return redirect('theloai');
    }
}
