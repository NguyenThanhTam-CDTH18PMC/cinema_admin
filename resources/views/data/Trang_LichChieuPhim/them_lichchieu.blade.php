@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm Lịch Chiếu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Lịch Chiếu</a></li>
              <li class="breadcrumb-item active">Thêm Lịch Chiếu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form class="content" action="{{ route('lichchieu.luu') }}" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm</h3>
            </div>
            <div class="card-body">

              <div class="form-group">
                <label for="inputName">Phim ID <span class="text-danger">*</span></label>
                <input type="text" class="form-control {{ $errors->has('phim_id') ? ' is-invalid ' : ''}}" name="phim_id">
                @if ($errors->has('phim_id'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('phim_id')}} </strong>
                  </span>
                @endif
              </div>

              <div class="form-group">
                <label for="inputName">Rạp ID <span class="text-danger">*</span></label>
                <input type="text" class="form-control {{ $errors->has('rap_id') ? ' is-invalid ' : ''}}" name="rap_id">
                @if ($errors->has('rap_id'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('rap_id')}} </strong>
                  </span>
                @endif
              </div>

              <div class="form-group">
                <label for="inputName">Thời Gian Bắt Đầu <span class="text-danger">*</span></label>
                <input type="date" name="thgian_batdau" class="form-control {{$errors->has('thgian_batdau') ? ' is-invalid' : ''}}">
              </div>
              @if ($errors->has('thgian_batdau'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('thgian_batdau')}} </strong>
                  </span>
                @endif

              <div class="form-group">
                <label for="inputName">Thời Gian Kết Thúc <span class="text-danger">*</span></label>
                <input type="date" name="thgian_ketthuc" class="form-control {{$errors->has('thgian_ketthuc') ? ' is-invalid' : ''}}">
              </div>
              @if ($errors->has('thgian_ketthuc'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('thgian_ketthuc')}} </strong>
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
          <input type="submit" value="Thêm ngay" class="btn btn-success">
        </div>
      </div>
      </center>

    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    @endsection

