<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TaiKhoan;
use DB;
class DoiMatKhauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taikhoan = TaiKhoan::all();
        $tk_mahoa = TaiKhoan::all();
        for ($i=0; $i < sizeof($taikhoan); $i++) { 
            $tk_mahoa[$i]->Matkhau = $taikhoan[$i]->Matkhau;
        }
        return response()->json($tk_mahoa, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TaiKhoan $taikhoan)
    {
        $chitiet = new TaiKhoan;
        $chitiet = $taikhoan;

        return response()->json($chitiet, 200);
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
        //
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
