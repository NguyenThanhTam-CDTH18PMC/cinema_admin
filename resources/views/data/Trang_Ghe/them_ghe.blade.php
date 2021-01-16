@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm Ghế</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Rạp</a></li>
              <li class="breadcrumb-item active">Thêm Ghế</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   <!-- Main content -->
    <form class="content" action="{{ route('ghe.luu') }}" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm</h3>
            </div>

            <div class="card-body">

              <div class="form-group">
                <label for="inputName">Số Ghế</label>
                <input type="text" class="form-control" name="Soghe">
              </div>
              
              <div class="form-group">
                <label for="inputStatus">Loại Ghế</label>
                <select class="form-control custom-select" name="loaighe">
                  <option selected disabled>----Chọn Loại Ghế----</option>
                      @foreach ($loai_ghes as $loaighe)
                          <option value="{{$loaighe->id}}">{{$loaighe->Tenloaighe}}</option>
                      @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="inputStatus">Rạp</label>
                <select class="form-control custom-select" name="rap">
                  <option selected disabled>----Chọn Rạp----</option>
                      @foreach ($raps as $rap)
                          <option value="{{$rap->id}}">{{$rap->Tenrap}}</option>
                      @endforeach
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