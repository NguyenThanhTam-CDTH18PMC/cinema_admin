<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DaoDien;
use App\Http\Requests\FormPost;
use Session;

class DaoDienController extends Controller
{

    
    public function index()
    {
        $dsdaodien = DaoDien::orderBy('id','desc')->paginate(10);
        return view("data.Trang_DaoDien.data_daodien",['daodien'=>$dsdaodien]);
    }

    public function create()
    {
        return view("data.Trang_DaoDien.them_daodien");
    }

    public function store(Request $request)
    {
        $vali_daodien = $request->validate([
            'Tendaodien' => 'bail | required | min:5',
            'Ngaysinh' => 'required | date',
            "Gioitinh" => 'nullable'
        ]);
        $daodien = DaoDien::create($vali_daodien);
        return redirect()->route('daodien.index');
    }
    
    public function edit($id)
    {
        $daodien = DaoDien::find($id);
        return view("data.Trang_DaoDien.sua_daodien",['daodien'=>$daodien]);
    }

    
    public function update(Request $request, $id)
    {
        $vali_daodien = $request->validate([
            'Tendaodien' => 'bail | required | min:5',
            'Ngaysinh' => 'required | date',
            "Gioitinh" => 'nullable'
        ]);
        $daodien = DaoDien::find($id);
        $daodien->Tendaodien = $request['Tendaodien'];
        $daodien->Ngaysinh = $request['Ngaysinh'];
        $daodien->Gioitinh = $request['Gioitinh'];
        $daodien->save();

        return redirect()->route('daodien.index');
    }

    
    public function destroy($id)
    {
        $daodien = DaoDien::find($id);
        $daodien->delete();
        return redirect('daodien');
    }
}
