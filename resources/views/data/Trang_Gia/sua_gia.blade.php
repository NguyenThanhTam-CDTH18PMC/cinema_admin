@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Giá</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Rạp</a></li>
              <li class="breadcrumb-item active">Sửa Giá</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form class="content" action="{{route('gia.capnhat',$gia->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header"> <h3 class="card-title">Sửa thông tin</h3> </div>

            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Giá Tiền</label>
                <input type="text" name="giatien" class="form-control" value="{{$gia->giatien}}">
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

