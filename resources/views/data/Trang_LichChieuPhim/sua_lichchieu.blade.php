@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Thông Tin Lịch Chiếu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Lịch Chiếu</a></li>
              <li class="breadcrumb-item active">Sửa Thông Tin Lịch Chiếu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form class="content" action="{{ route('lichchieu.capnhat',$lichchieu->id) }}" method="POST">
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
                <label for="inputName">Phim ID</label>
                <input type="text" name="phim_id" class="form-control" value="{{$lichchieu->phim_id}}">
              </div>
              <div class="form-group">
                <label for="inputName">Rạp ID</label>
                <input type="text" name="rap_id" class="form-control" value="{{$lichchieu->rap_id}}">
              </div>
              <div class="form-group">
                <label for="inputName">Thời gian bắt đầu</label>
                <input type="text" name="thgian_batdau" class="form-control" value="{{$lichchieu->thgian_batdau}}">
              </div>
              <div class="form-group">
                <label for="inputName">Thời gian kết thúc</label>
                <input type="text" name="thgian_ketthuc" class="form-control" value="{{$lichchieu->thgian_ketthuc}}">
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
