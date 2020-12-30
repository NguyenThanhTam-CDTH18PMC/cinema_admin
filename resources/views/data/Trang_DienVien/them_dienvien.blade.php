@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm Diễn Viên mới</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Diễn Viên</a></li>
              <li class="breadcrumb-item active">Thêm Diễn Viên</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form class="content" action="{{ route('dienvien.store') }}" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm</h3>

              <div class="card-tools">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Tên diễn viên <span class="text-danger">*</span></label>
                <input type="text" class="form-control {{$errors->has('Tendienvien') ? ' is-invalid' : ''}}" name="Tendienvien">
                @if ($errors->has('Tendienvien'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('Tendienvien')}} </strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="inputName">Ngày sinh <span class="text-danger">*</span></label>
                <input type="date" name="Ngaysinh" class="form-control {{$errors->has('Ngaysinh') ? ' is-invalid' : ''}}">
              </div>
              <div class="form-group">
                <label for="inputStatus">Giới tính <span class="text-danger">*</span></label>
                <select class="form-control custom-select" name="Gioitinh">
                  <option value="Nam">Nam</option>
                  <option value="Nữ">Nữ</option>
                </select>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          <input type="submit" value="Thêm ngay" class="btn btn-success">
        </div>
      </div>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    @endsection

