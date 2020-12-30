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
            <h1>Thêm Đạo diễn mới</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Đạo diễn</a></li>
              <li class="breadcrumb-item active">Thêm đạo diễn</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form class="content" action="{{ route('daodien.store') }}" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Tên đạo diễn <span class="text-danger">*</span></label>
                <input type="text" class="form-control {{ $errors->has('Tendaodien') ? ' is-invalid ' : ''}}" name="Tendaodien">
                @if ($errors->has('Tendaodien'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('Tendaodien')}} </strong>
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
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
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

