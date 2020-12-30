<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BinhLuan;
use Session;
class BinhLuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $binhluan = BinhLuan::paginate(10);
        return view("data.Trang_BinhLuan.data_binhluan",['binhluan'=>$binhluan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $binhluan = BinhLuan::create([
            'Noidung' => $request['Noidung'],
            'Ngaydang' => $request['Ngaydang'],
            'taikhoan_id' => $request['taikhoan_id'],
            'phim_id' => $request['phim_id'],
        ]);
        return redirect()->route('binhluan.index');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $binhluan = BinhLuan::find($id);
        return view("data.Trang_BinhLuan.sua_binhluan",['binhluan'=>$binhluan]);
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
        $binhluan = BinhLuan::find($id);
        $binhluan->Noidung = $request['Noidung'];
        $binhluan->Ngaydang = $request['Ngaydang'];
        $binhluan->taikhoan_id = $request['taikhoan_id'];
        $binhluan->phim_id = $request['phim_id'];
        $binhluan->save(); 
        return redirect()->route('BinhLuan.index');
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
