@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Hóa Đơn</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Vé</a></li>
              <li class="breadcrumb-item active">Hóa Đơn</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    
    <form class="content" action="{{route('dsve.capnhat',$dsve->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header"> <h3 class="card-title">Sửa thông tin</h3> </div>

            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Số Lượng</label>
                <input type="text" name="Soluong" class="form-control" value="{{$dsve->Soluong}}">
              </div>
              <div class="form-group">
                <label for="inputName">Tổng Tiền</label>
                <input type="text" name="Tongtien" class="form-control" value="{{$dsve->Tongtien}}">
              </div>
              <div class="form-group">
                <label for="inputStatus">Tài Khoản ID</label>
                <input type="text" name="taikhoan_id" class="form-control" value="{{$dsve->taikhoan_id}}">
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

