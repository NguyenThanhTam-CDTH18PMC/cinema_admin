@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh Sách Rạp</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Rạp</a></li>
              <li class="breadcrumb-item active">Danh Sách Rạp</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <section class="content">
      <!-- Default box -->
      <div class="card">
        <!-- Thanh tìm kiếm -->
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
                      <th style="width: 1%">
                          STT
                      </th>
                      <th class="text-center" style="width: 5%">
                          Tên rạp
                      </th>
                      <th style="width: 5%" class="text-center">
                         Số ghế
                      </th>
                      <th style="width: 5%" class="text-center">
                          Chi nhánh
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
              <?php  $stt = 1  ?>
              @foreach ($ds_rap as $rap)

              <tbody>
                  <tr>
                      <td class="text-center">
                         {{ $stt++ }} 
                      </td>
                      <td class="text-center">
                         {{ $rap->Tenrap }} 
                      </td>
                      <td class="text-center">
                          @php
                              echo $rap->hang * $rap->cot;
                          @endphp
                      </td>
                      <td class="text-center">
                         {{ $rap->chinhanh }}
                      </td>
                      <td class="text-center">
                          @if ($rap->delete_at == null)
                            hoạt động
                          @else
                            ngừng hoạt động
                          @endif
                      </td>
                      <td>
                        <form action="{{ route('rap.sua',$rap->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></button>
                      </form>
                      </td>
                      <td>
                      <form action="{{ route('rap.xoa',$rap->id) }}" method="POST">
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

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
