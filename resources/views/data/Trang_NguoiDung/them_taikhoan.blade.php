@extends('starter')  
  @section('content')
  <style>
    .error {
        color: red;
    }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm Tài khoản mới</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tài khoản</a></li>
              <li class="breadcrumb-item active">Thêm Tài khoản</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form class="content" action="{{ route('taikhoan.luu') }}" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Tên Tài khoản <span class="text-danger">*</span></label>
                <input type="text" class="form-control {{ $errors->has('Ten_TK') ? ' is-invalid ' : ''}}" name="Ten_TK">
                @if ($errors->has('Ten_TK'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('Ten_TK')}} </strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="inputName">Họ Tên <span class="text-danger">*</span></label>
                <input type="text" class="form-control {{ $errors->has('HoTen') ? ' is-invalid ' : ''}}" name="HoTen">
                @if ($errors->has('HoTen'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('HoTen')}} </strong>
                  </span>
                @endif
              </div>
              
                <div class="form-group">
                <label for="inputName">Email <span class="text-danger">*</span></label>
                <input type="text" class="form-control {{ $errors->has('Email') ? ' is-invalid ' : ''}}" name="Email">
                @if ($errors->has('Email'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('Email')}} </strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="inputName">Ngày sinh <span class="text-danger">*</span></label>
                <input type="date" name="Ngaysinh" class="form-control {{$errors->has('Ngaysinh') ? ' is-invalid' : ''}}">
              </div>
              @if ($errors->has('Ngaysinh'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('Ngaysinh')}} </strong>
                  </span>
                @endif
               
              <div class="form-group">
                <label for="inputStatus">Giới tính <span class="text-danger">*</span></label>
                <select class="form-control custom-select" name="Gioitinh">
                  <option selected="true" value="Nam">Nam</option>
                  <option value="Nữ">Nữ</option>
                </select>
              </div>
               <div class="form-group">
                <label for="inputName">Số Điện Thoại <span class="text-danger">*</span></label>
                <<input type="text" class="form-control {{ $errors->has('SDT') ? ' is-invalid ' : ''}}" name="SDT">
                @if ($errors->has('SDT'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('SDT')}} </strong>
                  </span>
                @endif
                <div class="form-group">
                <label for="inputName">Địa chỉ <span class="text-danger">*</span></label>
               <input type="text" class="form-control {{ $errors->has('Diachi') ? ' is-invalid ' : ''}}" name="Diachi">
                @if ($errors->has('Diachi'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('Diachi')}} </strong>
                  </span>
                @endif
              </div>
                
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        </div>
      </div>
      <center>
      <div class="row">
        <div class="col-12">
          <input type="submit" value="Thêm ngay" class="btn btn-success">
        </div>
      </div>
      </center>

    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    @endsection

