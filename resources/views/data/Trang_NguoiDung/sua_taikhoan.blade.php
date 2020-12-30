@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Tài khoản</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tài khoản</a></li>
              <li class="breadcrumb-item active">Sửa tài khoản</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
     <form class="content" action="{{ route('taikhoan.capnhat',$taikhoan->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header"> <h3 class="card-title">Sửa thông tin</h3> </div>

            <div class="card-body">
               <div class="form-group">
                <label for="inputName">Tên tài khoản</label>
                <input type="text" name="Ten_TK" class="form-control" value="{{$taikhoan->Ten_TK}}">
              </div>
              <div class="form-group">
                <label for="inputName">Họ Tên</label>
                <input type="text" name="HoTen" class="form-control" value="{{$taikhoan->HoTen}}">
              </div>
             
              
               <div class="form-group">
                <label for="inputName">Email</label>
                <input type="text" name="Email" class="form-control" value="{{$taikhoan->Email}}">
              </div>
                 <div class="form-group">
                <label for="inputName">Ngày Sinh</label>
                <input type="text" name="Ngaysinh" class="form-control" value="{{$taikhoan->Ngaysinh}}">
              </div>
                 
              <div class="form-group">
                <label for="inputStatus">Giới tính</label>
                <select class="form-control custom-select" name="Phai">
                  @if ($taikhoan->Gioitinh == "Nam")
                    <option selected="true"  value="Nam">Nam</option>
                    <option  value="Nữ">Nữ</option>
                  @else
                    <option value="Nam" >Nam</option>
                    <option selected="true"  value="Nữ" >Nữ</option>
                  @endif
                </select>
              </div>
               <div class="form-group">
                <label for="inputName">Số điện thoại</label>
                <input type="text" name="SDT" class="form-control" value="{{$taikhoan->SDT}}">
              </div>
              <div class="form-group">
                <label for="inputName">Địa chỉ</label>
                <input type="text" name="Diachi" class="form-control" value="{{$taikhoan->Diachi}}">
              </div>
              <div class="form-group">
                <label for="inputName">Tiền Tài Khoản</label>
                <input type="text" name="Tien_TK" class="form-control" value="{{$taikhoan->Tien_TK}}">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
        <input type="submit" value="Sửa ngay" class="btn btn-success">
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    @endsection



