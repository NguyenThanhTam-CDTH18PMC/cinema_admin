@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Đạo diễn</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Đạo diễn</a></li>
              <li class="breadcrumb-item active">Sửa đạo diễn</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form class="content" action="{{route('daodien.update',$daodien->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header"> <h3 class="card-title">Sửa thông tin</h3> </div>

            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Tên đạo diễn</label>
                <input type="text" class="form-control {{ $errors->has('Tendaodien') ? ' is-invalid ' : ''}}" name="Tendaodien" value="{{$daodien->Tendaodien}}">
                @if ($errors->has('Tendaodien'))
                  <span class="invalid-feedback">
                  <strong> {{$errors->first('Tendaodien')}} </strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="inputName">Ngày sinh</label>
                <input type="date" name="Ngaysinh" class="form-control" value="{{$daodien->Ngaysinh}}">
              </div>
              <div class="form-group">
                <label for="inputStatus">Giới tính</label>
                <select class="form-control custom-select" name="Gioitinh">
                  @if ($daodien->Gioitinh == "Nam")
                    <option selected="true"  value="Nam">Nam</option>
                    <option  value="Nữ">Nữ</option>
                  @else
                    <option value="Nam" >Nam</option>
                    <option selected="true"  value="Nữ" >Nữ</option>
                  @endif
                </select>
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

