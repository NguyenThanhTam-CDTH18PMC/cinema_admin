@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh Sách Đạo Diễn</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Đạo diễn</a></li>
              <li class="breadcrumb-item active">Danh Sách đạo diễn</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <section class="content">
    {{-- ----- Thêm đạo diễn ----- --}}
    <form action="{{ route('daodien.create') }}" method="GET">
      @csrf
      <button style="margin-bottom: 10px" type="submit" class="btn btn-success"> Thêm mới </button>
    </form>
    {{-- --------- --}}
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
                          Tên đạo diễn
                      </th>
                      <th style="width: 5%" class="text-center">
                          Ngày sinh
                      </th>
                      <th style="width: 5%" class="text-center">
                          Giới tính
                      </th>
                      <th style="width: 1%">
                      </th>
                      <th style="width: 1%">
                      </th>
                  </tr>
              </thead>
              @foreach ($daodien as $d)
              <tbody>
                  <tr>
                      <td class="text-center">
                          {{$d->Tendaodien}}
                      </td>
                      <td class="text-center">
                          {{$d->Ngaysinh}}
                      </td>
                      <td class="text-center">
                         {{$d->Gioitinh}}
                      </td>
                      <td class="project-actions text-right">
                        <form action="{{ route('daodien.edit',$d->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></button>
                      </form>
                      </td>
                      <td>
                      <form action="{{ route('daodien.destroy',$d->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                      </form> 
                      </td>
                  </tr>
              </tbody>
              @endforeach()
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <center>
        <div class="row">
          <div class="col-6">
            {!! $daodien->render() !!}
          </div>
        </div>
        </center>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
