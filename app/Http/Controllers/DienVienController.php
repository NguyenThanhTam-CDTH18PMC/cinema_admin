<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DienVien;
use App\Http\Requests\FormPost;
use Session;

class DienVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dienvien = DienVien::paginate(10);
        return view('data.Trang_DienVien.data_dienvien',['dienvien'=>$dienvien]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.Trang_DienVien.them_dienvien');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vali_dienvien = $request->validate([
            'Tendienvien' => 'bail | required | min:5',
            'Ngaysinh' => 'required | date',
            "Gioitinh" => 'nullable'
        ]);
        $dienvien = DienVien::create($vali_dienvien);
        return redirect()->route('dienvien.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dienvien = DienVien::find($id);
        return view("data.Trang_DienVien.sua_dienvien",['dienvien'=>$dienvien]);
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
        $vali_dienvien = $request->validate([
            'Tendienvien' => 'bail | required | min:5',
            'Ngaysinh' => 'required | date',
            "Gioitinh" => 'nullable'
        ]);
        $dienvien = DienVien::find($id);
        $dienvien->Tendienvien = $request->Tendienvien;
        $dienvien->Ngaysinh = $request->Ngaysinh;
        $dienvien->Gioitinh = $request->Gioitinh;
        $dienvien->save();
        return redirect()->route("dienvien.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dienvien = DienVien::find($id);
        $dienvien->delete();
        return redirect('dienvien');
    }
}
