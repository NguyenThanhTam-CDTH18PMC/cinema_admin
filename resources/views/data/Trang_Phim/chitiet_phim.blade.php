@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chi tiết Phim</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Phim</a></li>
              <li class="breadcrumb-item active">Chi tiết Phim</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <form class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              </div>
            </div>
            <div class="card-body row">
                <div class="col-sm-3">
                  <img  style="width: 200px" src="{{asset('public/image')}}/{{$phim[0]->Hinhanh}}">
                </div>
                <div class="col-sm-9">
                  <div>
                    <h2><label for="inputName">Tên phim: {{ $phim[0]->Tenphim}}</label></h2>
                  </div>
                  <div class="form-group">
                    <p><b>Đạo diễn:  </b>{{ $phim[0]->Tendaodien }}</p>
                  </div>
                  <div class="form-group">
                    <p><b>Danh sách diễn viên:  </b>{{ $phim[0]->ds_dienvien }}</p>
                  </div>
                  <div class="form-group">
                    <p><b>Thời lượng:  </b>{{ $phim[0]->ThoiLuong }}</p>
                  </div>
                  <div class="form-group">
                    <p><b>Định dạng:  </b>{{ $phim[0]->Loaidinhdang }}</p>
                  </div>
                  <div class="form-group">
                    <p><b>Trạng thái:  </b>{{ $phim[0]->Tentrangthai }}</p>
                  </div>
                  <div class="form-group">
                    <p><b>Thể loại:  </b>{{ $phim[0]->Tentheloai }}</p>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Mô tả phim: </label>
                    <textarea class="form-control" rows="3">{{ $phim[0]->Mota }}</textarea>
                  </div>
                </div>
                </br>
                <div style="margin-left: 300px">
                    <iframe  width="150%" height="300px" src="https://www.youtube.com/embed/{{ $phim[0]->Trailer }}">
                    </iframe>
                </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          {{-- <div class="card card-secondary">
            <div class="card-header">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Đạo diễn</label>
                <input type="text" id="tenphim" class="form-control" value="{{ $phim[0]->Tendaodien}}" disabled>
              </div>
              <div class="form-group">
                <label for="inputName">Danh sách diễn viên</label>
                <input type="text" id="tenphim" class="form-control" value="{{ $phim[0]->ds_dienvien}}" disabled>
              </div>
              <div class="form-group">
                <label for="inputName">Thể loại</label>
                <input type="text" id="tenphim" class="form-control" value="{{ $phim[0]->Tentheloai}}" disabled>
              </div>
              <div class="form-group">
                <label for="inputName">Định dạng</label>
                <input type="text" id="tenphim" class="form-control" value="{{ $phim[0]->Loaidinhdang}}" disabled>
              </div>
              <div class="form-group">
                <label for="inputName">Trangthai</label>
                <input type="text" id="tenphim" class="form-control" value="{{ $phim[0]->Tentrangthai}}" disabled>
              </div>
            </div> --}}

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    @endsection

