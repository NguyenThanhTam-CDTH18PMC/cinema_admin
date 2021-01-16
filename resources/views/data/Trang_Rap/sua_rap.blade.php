@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Thông Tin Rạp</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Rạp</a></li>
              <li class="breadcrumb-item active">Sửa Thông Tin Rạp</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form class="content" action="{{ route('rap.capnhat',$rap->id) }}" method="POST">
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
                <label for="inputName">ID</label>
                <input type="text" name="id" class="form-control" value="{{$rap->id}}">
              </div>
              <div class="form-group">
                <label for="inputName">Tên rạp</label>
                <input type="text" name="Tenrap" class="form-control" value="{{$rap->Tenrap}}">
              </div>
              <div class="form-group">
                <label for="inputName">Hàng</label>
                <input type="text" name="hang" class="form-control" value="{{$rap->hang}}">
              </div>
              <div class="form-group">
                <label for="inputName">Cột</label>
                <input type="text" name="cot" class="form-control" value="{{$rap->cot}}">
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


