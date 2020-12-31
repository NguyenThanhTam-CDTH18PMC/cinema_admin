<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//  Đăng nhập
Route::group(['prefix' => 'panel'], function () {
    Route::get('/login',"LoginController@getlogin")->name('getLogin');
    Route::post('/login',"LoginController@postlogin")->name('postLogin');
    Route::get('/logout','LoginController@getlogout')->name('getLogout');;
});

Route::group(['middleware' => ['CheckAdminLogin']], function () {
        
            /* ------ Thông ------- */
        //  Trang tổng quan
    Route::get('/index','LoginController@dashboard');
        // Trang tài khoản
    Route::resource('taikhoan','TaiKhoanController')->names([
        'destroy'=> 'taikhoan.xoa',
        'edit'=> 'taikhoan.sua',
        'update'=> 'taikhoan.capnhat',
        'create'=> 'taikhoan.them',
        'store'=> 'taikhoan.luu'
    ]);

        // Trang định dạng
    Route::resource('dinhdang','DinhDangController');
    //Trang trạng thái
    Route::resource('trangthai','TrangThaiController');

    
            // ------ Tâm ------
        // Trang đạo diễn
    Route::resource('daodien','DaoDienController');
        // Trang diễn viên
    // Route::resource('dienvien','DienVienController');
        // Trang Thể loại phim
    Route::resource('theloai','TheLoaiController');
        // Trang Phim
    Route::resource('phim','PhimController');
            // ------ Tấn ------
        // Trang Vé
    Route::resource('ve','VeController')->names([
        'show'=> 've.chitiet',
        'destroy'=> 've.xoa',
        'edit'=> 've.sua',
        'update'=> 've.capnhat',
        'create'=> 've.them',
        'store'=> 've.luu'
    ]);
    Route::resource('dsve','DsVeController')->names([
        'show'=> 'dsve.chitiet',
        'destroy'=> 'dsve.xoa',
        'edit'=> 'dsve.sua',
        'update'=> 'dsve.capnhat',
        'create'=> 'dsve.them',
        'store'=> 'dsve.luu'
    ]);
    Route::resource('binhluan','BinhLuanController')->names([
        'show'=> 'binhluan.chitiet',
        'destroy'=> 'binhluan.xoa',
        'edit'=> 'binhluan.sua',
        'update'=> 'binhluan.capnhat',
        'create'=> 'binhluan.them',
        'store'=> 'binhluan.luu'
    ]);
    Route::resource('gia','GiaController')->names([
        'show'=> 'gia.chitiet',
        'destroy'=> 'gia.xoa',
        'edit'=> 'gia.sua',
        'update'=> 'gia.capnhat',
        'create'=> 'gia.them',
        'store'=> 'gia.luu'
    ]);
        //Trang Phản Hồi
    Route::resource('phanhoi','PhanHoiController')->names([
        'show'=> 'phanhoi.chitiet',
        'destroy'=> 'phanhoi.xoa',
        'edit'=> 'phanhoi.sua',
        'update'=> 'phanhoi.capnhat',
        'create'=> 'phanhoi.them',
        'store'=> 'phanhoi.luu'
    ]);
});

