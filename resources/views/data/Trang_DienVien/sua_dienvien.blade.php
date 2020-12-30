@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Diễn Viên</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Diễn Viên</a></li>
              <li class="breadcrumb-item active">Sửa Diễn Viên</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form class="content" action="{{ route('dienvien.update',$dienvien->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Sửa thông tin</h3>

              <div class="card-tools">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Tên diễn viên</label>
                <input type="text" class="form-control {{$errors->has('Tendienvien') ? ' is-invalid' : ''}}" name="Tendienvien" value="{{ $dienvien->Tendienvien}}">
                @if ($errors->has('Tendienvien'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('Tendienvien')}} </strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="inputName">Ngày sinh</label>
                <input type="date" name="Ngaysinh" class="form-control {{$errors->has('Ngaysinh') ? ' is-invalid' : ''}}" value="{{$dienvien->Ngaysinh}}">
                @if ($errors->has('Ngaysinh'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('Ngaysinh')}} </strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="inputStatus">Giới tính</label>
                <select class="form-control custom-select" name="Gioitinh">
                  @if ($dienvien->Gioitinh == "Nam")
                    <option selected="true"  value="Nam">Nam</option>
                    <option  value="Nữ">Nữ</option>
                  @else
                    <option value="Nam" >Nam</option>
                    <option selected="true"  value="Nữ" >Nữ</option>
                  @endif
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
          <input type="submit" value="Sửa ngay" class="btn btn-success">
        </div>
      </div>
      </center>
    </form>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    @endsection

