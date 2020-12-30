<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Model\TaiKhoan;
use Session;
use App\Http\Resources\TaiKhoanResource;
use App\Http\Resources\TaiKhoanCollection;
use Illuminate\Support\Facades\Crypt;
class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dstaikhoan=TaiKhoan::orderBy('id','desc')->paginate(10);
        return view("data.Trang_NguoiDung.data_taikhoan",['taikhoan'=>$dstaikhoan]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("data.Trang_NguoiDung.them_taikhoan");
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
        $taikhoan = TaiKhoan::create([
            'Ten_TK' => $request['Ten_TK'],
            'HoTen' => $request['HoTen'],
            'Matkhau' => Crypt::encryptString($request->Matkhau),
            'Email' => $request['Email'],
            'Ngaysinh' => $request['Ngaysinh'],
            'Phai' => $request['Phai'],
            'SDT' => $request['SDT'],
            'Diachi' => $request['Diachi'],
            'Tien_TK' => $request['Tien_TK'],
        ]);
        return redirect()->route('taikhoan.index');

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
        return new TaiKhoanResource($taikhoan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taikhoan = TaiKhoan::orderBy('id','desc')->paginate(10);
        return view("data.Trang_NguoiDung.sua_taikhoan",['taikhoan'=>$taikhoan]);
        //
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
        $taikhoan = TaiKhoan::find($id);
        $taikhoan->Ten_TK = $request['Ten_TK'];
        $taikhoan->Hoten = $request['HoTen'];
        $taikhoan->Email = $request['Email'];                          
        $taikhoan->Ngaysinh = $request['Ngaysinh'];
        $taikhoan->Phai = $request['Phai'];
        $taikhoan->SDT = $request['SDT'];
        $taikhoan->Diachi = $request['Diachi'];
        $taikhoan->Tien_TK = $request['Tien_TK'];
        $taikhoan->save(); 
        return redirect()->route('taikhoan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $taikhoan = TaiKhoan::find($id);
        $taikhoan->delete();
        return redirect('taikhoan');
        //
    }
}