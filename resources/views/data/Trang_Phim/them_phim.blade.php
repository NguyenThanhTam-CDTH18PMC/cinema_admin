@extends('starter')  
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm Phim Mới</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Phim</a></li>
              <li class="breadcrumb-item active">Thêm Phim</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form enctype="multipart/form-data" class="content" action="{{ route('phim.store') }}" method="POST">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Thêm</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Tên phim</label>
                <input type="text" name="Tenphim" class="form-control {{ $errors->has('Tenphim')? ' is-invalid': ''}}">
                  @if ($errors->has('Tenphim'))
                      <span class="invalid-feedback">
                      <strong>{{ $errors->first('Tenphim') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="form-group">
                <label for="inputDescription">Mô tả phim</label>
                <textarea  name="Mota" class="form-control {{ $errors->has('Mota')? ' is-invalid': ''}}" rows="4"></textarea>
                @if ($errors->has('Mota'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('Hinhanh') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="inputStatus" >Thể loại</label>
                <select name="theloai" class="form-control {{ $errors->has('theloai') ? ' is-invalid ' : ''}}">
                  <option selected disabled>----Chọn thể loại----</option>
                      @foreach ($theloai as $tl)
                        <option value="{{$tl->id}}">{{$tl->Tentheloai}}</option>
                      @endforeach
                </select>
                @if ($errors->has('theloai'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('theloai') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="inputStatus">Trạng thái phim</label>
                <select class="form-control {{ $errors->has('Trangthai') ? ' is-invalid ' : ''}}" name="Trangthai">
                  <option selected disabled>----Chọn trạng thái----</option>
                      @foreach ($trangthai as $tt)
                          <option value="{{$tt->id}}">{{$tt->Tentrangthai}}</option>
                      @endforeach
                </select>
                @if ($errors->has('Trangthai'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('Trangthai') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="inputStatus">Định dạng phim</label>
                <select class="form-control {{ $errors->has('Dinhdang') ? ' is-invalid ' : ''}}" name="Dinhdang">
                  <option selected disabled>----Chọn định dạng----</option>
                    @foreach ($dinhdang as $dd)
                        <option value="{{$dd->id}}">{{$dd->Loaidinhdang}}</option>
                    @endforeach
                </select>
                @if ($errors->has('Dinhdang'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('Dinhdang') }}</strong>
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
                <select class="form-control {{ $errors->has('Daodien') ? ' is-invalid ' : ''}}" name="Daodien">
                  <option selected disabled>----Chọn đạo diễn----</option>
                      @foreach ($daodien as $dd)
                          <option value="{{$dd->id}}">{{$dd->Tendaodien}}</option>
                      @endforeach
                </select>
                @if ($errors->has('Daodien'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('Daodien') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="inputStatus">Diễn viên</label>
                <input type="text" name="dienvien" class="form-control {{ $errors->has('dienvien')? ' is-invalid': ''}}">
                @if ($errors->has('dienvien'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('dienvien') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="inputStatus">Thời lượng</label>
                  <input type="time" value=""  name="ThoiLuong" class="form-control {{ $errors->has('ThoiLuong') ? ' is-invalid ' : ''}}">
                  @if ($errors->has('ThoiLuong'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('ThoiLuong') }}</strong>
                  </span>
                @endif
                </div>
              <div class="form-group">
                <label >Hình ảnh</label>
                <input enctype="multipart/form-data" name="Hinhanh" accept="*.png|*.jpg|*.jpeg" value="" type="file" class="form-control {{ $errors->has('Hinhanh') ? ' is-invalid ' : ''}}" class="custom-file-input"/>
                @if ($errors->has('Hinhanh'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('Hinhanh') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label >Trailer</label>
                <input type="text" name="Trailer" class="form-control {{ $errors->has('Trailer') ? ' is-invalid ' : ''}}" class="custom-file-input" />
                @if ($errors->has('Trailer'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('Trailer') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="inputStatus">Điểm</label>
                <select class="form-control custom-select" name="Diem">
                  <option selected disabled>----Chọn----</option>
                  @for($i=0; $i <= 10; $i++)
                      <option value="{{$i}}">{{ $i}}</option>
                  @endfor
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Độ Tuổi</label>
                <select class="form-control custom-select" name="DoTuoi">
                  <option selected disabled>----Chọn----</option>
                  @for($i=5; $i <= 18; $i++)
                      <option value="{{$i}}">{{ $i}}</option>
                  @endfor
                </select>
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <input type="submit" value="Thêm ngay" class="btn btn-success">
        </div>
      </div>
    </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    @endsection

