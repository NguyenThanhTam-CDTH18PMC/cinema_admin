<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Rap;
use App\Http\Requests\FormPost;
use Session;

class RapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rap = Rap::paginate(10);
        return view('data.Trang_Rap.data_rap',['rap'=>$rap]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.Trang_Rap.them_rap');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vali_rap = $request->validate([
            'id' => $request['id'],  
            'Tenrap' => $request['Tenrap'],
            'hang' => $request['hang'],
            'cot' => $request['cot'],
            
        ]);
        $rap = Rap::create($vali_rap);
        return redirect()->route('rap.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rap = Rap::find($id);
        return view("data.Trang_Rap.sua_rap",['rap'=>$rap]);
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
        $vali_rap = $request->validate([
            'id' => $request['id'],
            'Tenrap' => $request['Tenrap'],
            'hang' => $request['hang'],
            'cot' => $request['cot'],
            
        ]);
        $rap = Rap::find($id);
        $rap->id = $request->id;
        $rap->Tenrap = $request->Tenrap;
        $rap->hang = $request->hang;
        $rap->cot = $request->cot;        
        $rap->save();
        return redirect()->route("rap.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rap = Rap::find($id);
        $rap->delete();
        return redirect('rap');
    }
}
