<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Ve;
use App\Model\DsVe;
use DB;
class VeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ve = DB::table('ves')
                ->join('phims','ves.phim_id','=','phims.id')
                ->join('ghes','ves.ghe_id','=','ghes.id')
                ->join('dao_diens','phims.daodien_id','=','dao_diens.id')
                ->join('raps','raps.id','=','ghes.rap_id')
                ->select('phims.Tenphim','phims.Hinhanh','raps.Tenrap','ves.Thanhtien','ghes.Soghe', 'ves.dsve_id', 'ves.suatchieu_id', 'ves.ghe_id', 'ghes.rap_id')
                ->get();
        return response()->json($ve, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ve = Ve::create([
            'dsve_id' => $request['dsve_id'],
            'ghe_id' => $request['ghe_id'],
            'phim_id' => $request['phim_id'],
            'suatchieu_id' => $request['suatchieu_id'],
            'Thanhtien' => $request['thanhtien'],
        ]);
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
