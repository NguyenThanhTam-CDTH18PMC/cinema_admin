<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TaiKhoan;
use App\Http\Resources\TaiKhoanResource;
use App\Http\Resources\TaiKhoanCollection;
use Illuminate\Support\Facades\Crypt;
use DB;
class TaiKhoanController extends Controller
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

        return TaiKhoan::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TaiKhoan $taikhoan)
    {
        $chitiet = $taikhoan;

        return ['id' => $taikhoan->id,
                'Ten_TK' => $taikhoan->Ten_TK,
                'HoTen' => $taikhoan->HoTen,
                'Email' => $taikhoan->Email,
                'Ngaysinh' => $taikhoan->Ngaysinh,
                'Phai' => $taikhoan->Phai,
                'SDT' => $taikhoan->SDT,
                'Diachi' => $taikhoan->Diachi,
                'Admin' => $taikhoan->Admin,
                'Tien_TK' => $taikhoan->Tien_TK,
            'Matkhau' => $taikhoan->Matkhau,];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaiKhoan $taikhoan)
    {
       return $taikhoan->update($request->all());
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
