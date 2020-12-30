@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh Sách Diễn Viên</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Diễn viên</a></li>
              <li class="breadcrumb-item active">Danh Sách Diễn viên</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <section class="content">
    <form action="{{ route('dienvien.create') }}" method="GET">
      @csrf
      <button style="margin-bottom: 10px" type="submit" class="btn btn-success"> Thêm mới </button>
    </form>
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
                          Tên diễn viên
                      </th>
                      <th style="width: 5%" class="text-center">
                          Ngày sinh
                      </th>
                      <th style="width: 5%" class="text-center">
                          Giới tính
                      </th>
                      <th style="width: 5%" class="text-center">
                          Trạng thái
                      </th>
                      <th style="width: 1%">
                      </th>
                      <th style="width: 1%">
                      </th>
                  </tr>
              </thead>
              
              @foreach ($dienvien as $dv)

              <tbody>
                  <tr>
                      <td class="text-center">
                         {{ $dv->Tendienvien }} 
                      </td>
                      <td class="text-center">
                          {{ $dv->Ngaysinh }}
                      </td>
                      <td class="text-center">
                         {{ $dv->Gioitinh }}
                      </td>
                      <td class="text-center">
                          @if ($dv->delete_at == null)
                            hoạt động
                          @else
                            ngừng hoạt động
                          @endif
                      </td>
                      <td>
                        <form action="{{ route('dienvien.edit',$dv->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></button>
                      </form>
                      </td>
                      <td>
                      <form action="{{ route('dienvien.destroy',$dv->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
      <div> {!! $dienvien->render() !!} </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
