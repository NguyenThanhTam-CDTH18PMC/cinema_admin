@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh Chi Nhánh</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Chi Nhánh</a></li>
              <li class="breadcrumb-item active">Danh Sách Chi Nhánh</li>
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
                          Tên chi nhánh
                      </th>
                      
                      <th style="width: 1%">
                      </th>
                      <th style="width: 1%">
                      </th>
                  </tr>
              </thead>
              <?php  $stt = 1  ?>
              @foreach ($chinhanh as $cn)

              <tbody>
                  <tr>
                      <td class="text-center">
                         {{ $stt++ }} 
                      </td>
                      <td class="text-center">
                         {{ $cn->Tenchinhanh }} 
                      </td>
                      
                      <td>
                        <form action="{{ route('chinhanh.edit',$cn->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></button>
                      </form>
                      </td>
                      <td>
                      <form action="{{ route('chinhanh.destroy',$cn->id) }}" method="POST">
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
      <div> {!! $chinhanh->render() !!}</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
