@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm Định dạng mới</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Định Dạng</a></li>
              <li class="breadcrumb-item active">Thêm định dạng</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form class="content" action="{{ route('dinhdang.luu') }}" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm</h3>
            </div>

            <div class="card-body">

              <div class="form-group">
                <label for="inputName">Tên định dạng</label>
                <input type="text" class="form-control" name="loaidinhdang">
              </div>
              <div class="form-group">
                <label for="inputStatus">Giá</label>
                <select class="form-control custom-select" name="gia">
                  <option selected disabled>----Chọn giá----</option>
                      @foreach ($ds_gia as $gia)
                          <option value="{{$gia->id}}">{{$gia->giatien}}</option>
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

