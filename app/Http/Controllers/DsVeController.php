<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DsVe;
use Session;
class DsVeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $dsve = DsVe::paginate(1);
        return view("data.Trang_DanhSachVe.data_dsve",['dsve'=>$dsve]);
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
         $dsve = DsVe::create([
            'Soluong' => $request['Soluong'],
            'Tongtien' => $request['Tongtien'],
            'taikhoan_id' => $request['taikhoan_id'],
        ]);
        return redirect()->route('dsve.index');
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
       $dsve = DsVe::find($id);
        return view("data.Trang_DanhSachVe.sua_dsve",['dsve'=>$dsve]);
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
       $dsve = DsVe::find($id);
        $dsve->Soluong = $request['Soluong'];
        $dsve->Tongtien = $request['Tongtien'];
        $dsve->taikhoan_id = $request['taikhoan_id'];
        $dsve->save(); 
        return redirect()->route('dsve.index');
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
