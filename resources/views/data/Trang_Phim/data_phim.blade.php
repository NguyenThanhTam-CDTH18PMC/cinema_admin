@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh Sách Phim</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Phim</a></li>
              <li class="breadcrumb-item active">Danh Sách Phim</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <section class="content">
    <div class="col-12">
      <form action="{{ route('phim.create') }}" method="GET">
        @csrf
        <button style="margin-bottom: 10px" type="submit" class="btn btn-success"> Thêm mới </button>
      </form>
    </div>
      <!-- Default box -->
      <div class="card">

        <!-- Search -->
        <div class="card-header">
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width:200px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
      </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th class="text-center" style="width: 5%">
                          Ảnh
                      </th>
                      <th class="text-center"style="width: 5%">
                          Tên phim
                      </th>
                      <th class="text-center"style="width: 5%">
                          Điểm
                      </th>
                      <th class="text-center"style="width: 5%">
                          Thời lượng
                      </th>
                      <th class="text-center"style="width: 5%">
                          Trạng thái
                      </th>
                      <th style="width: 1%">
                      </th>
                      <th style="width: 1%">
                      </th>
                      <th style="width: 1%">
                      </th>
                  </tr>
              </thead>
              @foreach ($phim as $p)
                <tbody>
                  <tr>
                      <td class="text-center">
                          <img  style="width: 100px" src="{{asset('public/Image')}}/{{$p->Hinhanh}}">
                      </td>
                      <td class="text-center">
                            {{$p->Tenphim}}  
                      </td>
                      <td class="text-center">
                          {{$p->Diem}}/10
                      </td>
                      <td class="text-center">
                          {{$p->ThoiLuong}}
                      </td>
                      <td class="text-center">
                          {{$p->Tentrangthai}}
                      </td> 
                      </td>
                      <td class="project-actions text-right">
                        <form action="{{ route('phim.edit',$p->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></button>
                      </form>
                      </td>
                      <td>
                      <form action="{{ route('phim.destroy',$p->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                      </form> 
                      </td>
                      <td class="project-actions">
                        <form action="{{ route('phim.show',$p->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-folder">
                              </i></button>
                      </form>
                      </td>
                  </tr>
              </tbody>
              @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <div class="row">
        <div class="col-6">
          {!! $phim->render() !!}
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
