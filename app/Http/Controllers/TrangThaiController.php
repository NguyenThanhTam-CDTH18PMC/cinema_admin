<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TrangThai;

class TrangThaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trangthai = TrangThai::paginate(10);
        return view('data.Trang_TrangThaiPhim.data_trangthaiphim',['trangthai'=>$trangthai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.Trang_TrangThaiPhim.them_trangthaiphim');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trangthai = TrangThai::create([
            'Tentrangthai' => $request['tentrangthai'],
                                                                                
        ]);
        return redirect()->route('trangthai.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trangthai = TrangThai::find($id);
        return view('data.Trang_TrangThaiPhim.sua_trangthaiphim',['trangthai'=>$trangthai]);
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
        $trangthai = TrangThai::find($id);
        $trangthai->Tentrangthai = $request['tentrangthai'];
        $trangthai->save();

        return redirect()->route("trangthai.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trangthai = TrangThai::find($id);
        $trangthai->delete();
        return redirect('trangthai.index');
    }
}
