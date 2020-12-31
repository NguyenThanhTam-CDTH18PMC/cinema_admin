<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Phim;
use App\Model\DsDienvien;
use DB;
use Session;
use App\Http\Requests\PhimRequest;
class PhimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phim = DB::table('phims')
                ->join('the_loais','phims.theloai_id','=','the_loais.id')
                ->join('trang_thais','phims.trangthai_id','=','trang_thais.id')
                ->join('dinh_dangs','phims.dinhdang_id','=','dinh_dangs.id')
                ->join('dao_diens','phims.daodien_id','=','dao_diens.id')
                ->select('phims.id','phims.Tenphim', 'phims.Hinhanh', 'the_loais.Tentheloai',
                        'phims.Diem', 'Phims.ThoiLuong', 'trang_thais.Tentrangthai')
                ->where('phims.deleted_at',"=",null)
                ->orderBy('phims.id','desc')
                ->paginate(5);
        return view('data.Trang_Phim.data_phim',['phim'=>$phim]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $daodien   = DB::table('dao_diens')->get();
        $theloai   = DB::table('the_loais')->get();
        $trangthai = DB::table('trang_thais')->get();
        // $dienvien  = DB::table('dien_viens')->get();
        $dinhdang  = DB::table('dinh_dangs')->get();
        return view('data.Trang_Phim.them_phim',["daodien"=>$daodien,
                                                 "theloai"=>$theloai,
                                                 "trangthai"=>$trangthai,
                                                 "dinhdang"=>$dinhdang
                                                //  ,"dienvien"=>$dienvien]);
                                                ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhimRequest $request)
    { 

        if($request->hasFile('Hinhanh'))
        {
            $image_name = $request->file('Hinhanh')->getClientOriginalName();
            $filename = pathinfo($image_name,PATHINFO_FILENAME);
            $image_ext = $request->file('Hinhanh')->getClientOriginalExtension();
            $filenameToStore = $filename.'-'.time().'.'.$image_ext;
            $path = $request->file('Hinhanh')->storeAs('',$filenameToStore);
        }
        else
        {
            $filenameToStore = 'noimage.png';
        }

        $phim = Phim::create([
            'Tenphim' => $request['Tenphim'],
            'Hinhanh' => $filenameToStore,
            'Mota' => $request['Mota'],
            'Diem' => $request['Diem'],
            'Ds_dienvien' => $request['dienvien'],
            'Trailer' => $request['Trailer'],
            'ThoiLuong' => $request['Thoiluong'].':00',
            'dinhdang_id' => $request['Dinhdang'],
            'daodien_id' => $request['Daodien'],
            'trangthai_id' => $request['Trangthai'],
            'theloai_id' => $request['theloai'],
        ]);

        return redirect()->route('phim.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phim = DB::table('phims')
                ->join('the_loais','phims.theloai_id','=','the_loais.id')
                ->join('trang_thais','phims.trangthai_id','=','trang_thais.id')
                ->join('dinh_dangs','phims.dinhdang_id','=','dinh_dangs.id')
                ->join('dao_diens','phims.daodien_id','=','dao_diens.id')
                ->select('phims.id', 'phims.Tenphim', 'phims.Hinhanh', 'phims.Mota', 'phims.Trailer',
                   'the_loais.Tentheloai', 'phims.Ds_dienvien','phims.Diem', 'Phims.ThoiLuong',
                   'trang_thais.Tentrangthai', 'dinh_dangs.Loaidinhdang', 'dao_diens.Tendaodien')
                ->where('phims.id',"=",$id)
                ->get();
        return view('data.Trang_Phim.chitiet_phim',['phim'=>$phim]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daodien   = DB::table('dao_diens')->get();
        $theloai   = DB::table('the_loais')->get();
        $trangthai = DB::table('trang_thais')->get();
        $dinhdang  = DB::table('dinh_dangs')->get();
        
        $phim      = DB::table('phims')
                    ->join('the_loais','phims.theloai_id','=','the_loais.id')
                    ->join('trang_thais','phims.trangthai_id','=','trang_thais.id')
                    ->join('dinh_dangs','phims.dinhdang_id','=','dinh_dangs.id')
                    ->join('dao_diens','phims.daodien_id','=','dao_diens.id')
                    ->select('phims.id', 'phims.Tenphim', 'phims.Hinhanh', 'phims.Mota', 'phims.Trailer',
                    'the_loais.Tentheloai', 'phims.Ds_dienvien','phims.Diem', 'phims.ThoiLuong',
                    'trang_thais.Tentrangthai', 'dinh_dangs.Loaidinhdang', 'dao_diens.Tendaodien',
                    'phims.daodien_id', 'phims.theloai_id', 'phims.trangthai_id','phims.dinhdang_id')
                    ->where('phims.id',"=",$id)
                    ->get();
        return view('data.Trang_Phim.sua_phim',['phim'=>$phim,
                                                "daodien"=>$daodien,
                                                "theloai"=>$theloai,
                                                "trangthai"=>$trangthai,
                                                "dinhdang"=>$dinhdang]);
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
        if($request->hasFile('Hinhanh'))
        {
            $image_name = $request->file('Hinhanh')->getClientOriginalName();
            $filename = pathinfo($image_name,PATHINFO_FILENAME);
            $image_ext = $request->file('Hinhanh')->getClientOriginalExtension();
            $filenameToStore = $filename.'-'.time().'.'.$image_ext;
            $path = $request->file('Hinhanh')->storeAs('',$filenameToStore);
        }
        else
        {       
             $phim = Phim::find($id);

            $phim->Tenphim = $request['Tenphim'];
            $phim->Hinhanh = $phim->Hinhanh;
            $phim->Mota = $request['Mota'];
            $phim->Ds_dienvien = $request['dienvien'];
            $phim->Trailer = $request['Trailer'];
            $phim->ThoiLuong = $request['ThoiLuong'];
            $phim->dinhdang_id = $request['Dinhdang'];
            $phim->daodien_id = $request['Daodien'];
            $phim->trangthai_id = $request['Trangthai'];
            $phim->theloai_id = $request['theloai'];
    
            $phim->save();
    
            return redirect()->route('phim.index');
            return $request;
        }

        $phim = Phim::find($id);

        $phim->Tenphim = $request['Tenphim'];
        $phim->Hinhanh = $filenameToStore;
        $phim->Mota = $request['Mota'];
        $phim->Ds_dienvien = $request['dienvien'];
        $phim->Trailer = $request['Trailer'];
        $phim->ThoiLuong = $request['ThoiLuong'];
        $phim->dinhdang_id = $request['Dinhdang'];
        $phim->daodien_id = $request['Daodien'];
        $phim->trangthai_id = $request['Trangthai'];
        $phim->theloai_id = $request['theloai'];

        $phim->save();

        return redirect()->route('phim.index');
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phim = Phim::find($id);
        $phim->delete();
        return redirect()->route('phim.index');
    }
}
