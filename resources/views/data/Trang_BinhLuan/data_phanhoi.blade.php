@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Phản Hồi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tài Khoản</a></li>
              <li class="breadcrumb-item active">Phản Hồi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">

          <form class="form-inline ml-3">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th class="text-center" style="width: 1%">
                          STT
                      </th>
                      <th class="text-center" style="width: 5%">
                          Nội Dung
                      </th>
                      <th style="width: 5%" class="text-center">
                          Ngày Đăng
                      </th>
                      <th style="width: 5%" class="text-center">
                          Tài Khoản ID
                      </th>
                      <th style="width: 5%" class="text-center">
                          Bình Luận ID
                      </th>
                      <th style="width: 2%">
                      </th>
                      <th style="width: 2%">
                      </th>
                  </tr>
              </thead>
              <?php
                $dem = 1;
              ?>
              @foreach ($phanhoi as $ph)
              <tbody>
                  <tr>
                      <td class="text-center">
                          {{$dem++}}
                      </td>
                      <td class="text-center">
                          {{$ph->Noidung}}
                      </td>
                      <td class="text-center">
                          {{$ph->Ngaydang}}
                      </td>
                      <td class="text-center">
                         {{$ph->taikhoan_id}}
                      </td>
                      <td class="text-center">
                         {{$ph->binhluan_id}}
                      </td>
                      <td>
                      <form action="{{ route('phanhoi.xoa',$ph->id) }}" method="POST">
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
            {!! $phanhoi->render() !!}
          </div>
        </div>
        </center>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
