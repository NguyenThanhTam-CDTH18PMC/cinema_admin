@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa Phim</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Phim</a></li>
              <li class="breadcrumb-item active">Sửa Phim</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <form class="content" action="{{ route('phim.update',$phim[0]->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Hình ảnh</label>
                <img  style="width: 100px" src="{{asset('public/image')}}/{{$phim[0]->Hinhanh}}">
              </div>
              <div class="form-group">
                <label >Hình ảnh</label>
                <input enctype="multipart/form-data" accept="*.png|*.jpg|*.jpeg" value="" type="file" class="form-control {{ $errors->has('Hinhanh') ? ' is-invalid ' : ''}}" class="custom-file-input" name="Hinhanh"/>
                @if ($errors->has('Hinhanh'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('Hinhanh') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="inputName">Tên phim</label>
                <input type="text" name="Tenphim" class="form-control" value="{{ $phim[0]->Tenphim}}" required="required" >
              </div>
              <div class="form-group">
                <label for="inputDescription">Mô tả phim</label>
                <textarea required="required" id="Mota" class="form-control" rows="3" >{{$phim[0]->Mota}} </textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Điểm</label>
                <select class="form-control custom-select" name="Diem">
                  <option selected disabled>{{$phim[0]->Diem}}</option>
                  @for($i=0; $i <= 10; $i++)
                      <option value={{ $i}}> {{ $i }}</option>
                  @endfor
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Thời lượng</label>
                  <input type="time" value=""  name="Thoiluong" class="form-control {{ $errors->has('Thoiluong') ? ' is-invalid ' : ''}}">
                  @if ($errors->has('Thoiluong'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('Thoiluong') }}</strong>
                  </span>
                @endif
                </div>
                
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              </div>
            </div>
            <div class="card-body">

              <div class="form-group">
                <label for="inputStatus">Đạo diễn</label>
                <select class="form-control custom-select" name="Daodien">
                  <option selected disabled>{{$phim[0]->Tendaodien}}</option>
                  @foreach ($daodien as $item)
                      <option>{{ $item->Tendaodien}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="inputDescription">Danh sách diễn viên</label>
                <textarea name="ds_dienien" class="form-control" rows="3" >{{$phim[0]->ds_dienvien}} </textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Thể loại</label>
                <select class="form-control custom-select" name="theloai">
                  <option selected disabled>{{$phim[0]->Tentheloai}}</option>
                  @foreach ($theloai as $item)
                  <option>{{ $item->Tentheloai}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Trạng thái phim</label>
                <select class="form-control custom-select" name="Trangthai">
                  <option selected disabled>{{$phim[0]->Tentrangthai}}</option>
                  @foreach ($trangthai as $item)
                      <option>{{ $item->Tentrangthai}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Định dạng phim</label>
                <select class="form-control custom-select" name="Dinhdang">
                  <option selected disabled>{{$phim[0]->Loaidinhdang}}</option>
                  @foreach ($dinhdang as $item)
                      <option>{{ $item->Loaidinhdang}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label >Trailer</label>
                <input  value="{{$phim[0]->Trailer}}" type="text" class="form-control {{ $errors->has('Trailer') ? ' is-invalid ' : ''}}" class="custom-file-input" name="Trailer"/>
                @if ($errors->has('Trailer'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('Trailer') }}</strong>
                  </span>
                @endif
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input type="submit" value="Sửa ngay" class="btn btn-success">
        </div>
      </div>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    @endsection

