@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Suất Chiếu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Suất Chiếu</a></li>
              <li class="breadcrumb-item active">Sửa Suất Chiếu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   <!-- Main content -->
    <form class="content" action="{{ route('suatchieu.capnhat',$suatchieu->id) }}" method="POST">
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
                <label for="inputStatus">Giờ Chiếu</label>
                  <input type="time" value="{{$suatchieu->GioChieu}}"  name="GioChieu" class="form-control {{ $errors->has('GioChieu') ? ' is-invalid ' : ''}}">
                  @if ($errors->has('GioChieu'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('GioChieu') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group">
                <label for="inputName">Ngày Chiếu <span class="text-danger">*</span></label>
                <input type="date" value="{{$suatchieu->NgayChieu}}" name="NgayChieu" class="form-control {{$errors->has('NgayChieu') ? ' is-invalid' : ''}}">
              </div>
              @if ($errors->has('NgayChieu'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('NgayChieu')}} </strong>
                  </span>
                @endif
              

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
