@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh Sách Người Dùng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Người Dùng</a></li>
              <li class="breadcrumb-item active">Danh Sách Người Dùng</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <!-- SEARCH FORM -->
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
                      
                      <th class="text-center" style="width: 5%">
                          Tên Tài Khoản
                      </th>
                      <th style="width: 5%" class="text-center">
                          Họ Tên
                      </th>
                      <th style="width: 5%" class="text-center">
                          Mật Khẩu
                      </th>
                      <th style="width: 5%" class="text-center">
                          Email
                      </th>
                      <th style="width: 5%" class="text-center">
                          Ngày Sinh
                      </th>
                      <th style="width: 5%" class="text-center">
                          Phái
                      </th>
                      <th style="width: 5%" class="text-center">
                          SDT
                      </th>
                      <th style="width: 5%" class="text-center">
                          Địa chỉ
                      </th>
                      <th style="width: 5%" class="text-center">
                          Tiền Tài Khoản
                      </th>
                      <th style="width: 5%">
                      </th>
                      <th style="width: 5%">
                      </th>
                  </tr>
              </thead>
              <?php
                $dem = 1;
              ?>
              @foreach ($taikhoan as $t)
              <tbody>
                  <tr>
                     
                      <td class="text-center">
                          {{$t->Ten_TK}}
                      </td>
                      <td class="text-center">
                          {{$t->HoTen}}
                      </td>
                      <td class="text-center">
                          {{$t->Matkhau}}
                      </td>
                       <td class="text-center">
                         {{$t->Email}}
                      </td>
                       <td class="text-center">
                         {{$t->Ngaysinh}}
                      </td>
                       <td class="text-center">
                         {{$t->Phai}}
                      </td>
                       <td class="text-center">
                         {{$t->SDT}}
                      </td>
                       <td class="text-center">
                         {{$t->Diachi}}
                      </td>
                      <td class="text-center">
                         {{$t->Tien_TK}}
                      </td>
                      <td class="project-actions text-right">
                        <form action="{{ route('taikhoan.sua',$t->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></button>
                      </form>
                      </td>
                      <td>
                      <form action="{{ route('taikhoan.xoa',$t->id) }}" method="POST">
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
      <div> {!! $taikhoan->render() !!}</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
