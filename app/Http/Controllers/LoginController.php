<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Model\User;

class LoginController extends Controller
{
    public function getlogin(){
        //Đã đăng nhập rồi
        if (Auth::check()) {
            return view('layouts.index');
        } 
        else {
            return view('layouts.login');
        }
    }

    public function postlogin(Request $request){
        $taikhoan = [
            'email'=> $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($taikhoan)){
            return view('layouts.index',['name',Auth::user()->name]);
        }
        else return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
    }

    public function dashboard(){
        return view('layouts.index');
    }

    public function getLogout()
    {
        Auth::logout();
        return view('layouts.login');
    }


}
