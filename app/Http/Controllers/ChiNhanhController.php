<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ChiNhanh;

class ChiNhanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chinhanh = ChiNhanh::paginate(10);
        return view('data.Trang_ChiNhanh.data_chinhanh',['chinhanh'=>$chinhanh]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.Trang_ChiNhanh.them_chinhanh');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vali_chinhanh = $request->validate([
            "Tenchinhanh" => 'required | min: 5 | alpha'
        ]);
        $chinhanh = ChiNhanh::create([$vali_chinhanh]);
        return redirect()->route('chinhanh.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $chinhanh = ChiNhanh::find($id);
        return view('data.Trang_ChiNhanh.sua_chinhanh',['chinhanh'=>$chinhanh]);
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
        $chinhanh = ChiNhanh::find($id);
        $chinhanh->Tenchinhanh = $request['tenchinhanh'];
        $chinhanh->save();

        return redirect()->route("chinhanh.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chinhanh = ChiNhanh::find($id);
        $chinhanh->delete();
        return redirect('chinhanh');
    }
}
