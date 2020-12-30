@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh Sách Trạng Thái</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trạng Thái</a></li>
              <li class="breadcrumb-item active">Danh Sách Trạng Thái</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <section class="content">

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
                          Tên Trạng Thái
                      </th>
                    
                      <th style="width: 1%">
                      </th>
                      <th style="width: 1%">
                      </th>
                  </tr>
              </thead>
              <?php $stt = 1 ?>
              @foreach ($trangthai as $tt)
                <tbody>
                  <tr>
                      
                      <td class="text-center">
                         {{ $tt->Tentrangthai }}
                      </td>
                      
                      <td class="project-actions text-right">
                        <form action="{{ route('trangthai.sua',$tt->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></button>
                      </form>
                      </td>
                      <td>
                      <form action="{{ route('trangthai.xoa',$tt->id) }}" method="POST">
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
      <div> {!! $trangthai->render() !!} </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
