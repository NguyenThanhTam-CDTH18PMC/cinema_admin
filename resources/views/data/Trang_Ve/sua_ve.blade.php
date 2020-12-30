@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Vé</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Vé</a></li>
              <li class="breadcrumb-item active">Sửa Vé</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form class="content" action="{{route('ve.capnhat',$ve->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header"> <h3 class="card-title">Sửa thông tin</h3> </div>

            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Danh Sách Vé ID</label>
                <input type="text" name="dsve_id" class="form-control" value="{{$ve->dsve_id}}">
              </div>
              <div class="form-group">
                <label for="inputName">Ghế ID</label>
                <input type="text" name="ghe_id" class="form-control" value="{{$ve->ghe_id}}">
              </div>
              <div class="form-group">
                <label for="inputStatus">Phim ID</label>
                <input type="text" name="phim_id" class="form-control" value="{{$ve->phim_id}}">
              </div>
              <div class="form-group">
                <label for="inputStatus">Suất Chiếu ID</label>
                <input type="text" name="suatchieu_id" class="form-control" value="{{$ve->suatchieu_id}}">
              </div>
              <div class="form-group">
                <label for="inputStatus">Thành Tiền</label>
                <input type="text" name="thanhtien" class="form-control" value="{{$ve->ThanhTien}}">
              </div>
            </div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
        <input type="submit" value="Sửa ngay" class="btn btn-success">
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    @endsection

