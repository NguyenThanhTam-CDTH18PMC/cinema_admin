@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm Rạp</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Rạp</a></li>
              <li class="breadcrumb-item active">Thêm Rạp</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form class="content" action="{{ route('rap.luu') }}" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm</h3>
            </div>
            <div class="card-body">

              <div class="form-group">
                <label for="inputName">ID <span class="text-danger">*</span></label>
                <input type="text" class="form-control {{ $errors->has('id') ? ' is-invalid ' : ''}}" name="id">
                @if ($errors->has('id'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('id')}} </strong>
                  </span>
                @endif
              </div>

              <div class="form-group">
                <label for="inputName">Tên Rạp <span class="text-danger">*</span></label>
                <input type="text" class="form-control {{ $errors->has('TenRap') ? ' is-invalid ' : ''}}" name="TenRap">
                @if ($errors->has('Tenrap'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('Tenrap')}} </strong>
                  </span>
                @endif
              </div>

              <div class="form-group">
                <label for="inputName">Hàng <span class="text-danger">*</span></label>
                <input type="text" class="form-control {{ $errors->has('hang') ? ' is-invalid ' : ''}}" name="hang">
                @if ($errors->has('hang'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('hang')}} </strong>
                  </span>
                @endif
              </div>

              <div class="form-group">
                <label for="inputName">Cột <span class="text-danger">*</span></label>
                <input type="text" class="form-control {{ $errors->has('cot') ? ' is-invalid ' : ''}}" name="cot">
                @if ($errors->has('cot'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('cot')}} </strong>
                  </span>
                @endif
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


