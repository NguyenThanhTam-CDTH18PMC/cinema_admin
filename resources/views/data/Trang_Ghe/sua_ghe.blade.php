@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Ghế</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Rạp</a></li>
              <li class="breadcrumb-item active">Sửa Ghế</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form class="content" action="{{ route('ghe.capnhat',$ghe->id) }}" method="POST">
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
                <label for="inputName">Số Ghế</label>
                <input type="text" name="Soghe" class="form-control" value="{{$ghe->Soghe}}">
              </div>

               <div class="form-group">
                <label for="inputStatus">Loại Ghế</label>
                <select class="form-control custom-select" name="loaighe">
                      @foreach ($loai_ghes as $loaighe)
                          <option   @if( $loaighe->id == $ghe[0]->Loaighe_id) elected @endif value="{{$loaighe->id}}">{{$loaighe->Tenloaighe}}</option>
                      @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="inputStatus">Rạp</label>
                <select class="form-control custom-select" name="rap">
                      @foreach ($raps as $rap)
                          <option   @if( $rap->id == $ghe[0]->rap_id) elected @endif value="{{$rap->id}}">{{$rap->Tenrap}}</option>
                      @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="inputName">Trạng Thái</label>
                <input type="text" name="Trangthai" class="form-control" value="{{$ghe->Trangthai}}">
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
