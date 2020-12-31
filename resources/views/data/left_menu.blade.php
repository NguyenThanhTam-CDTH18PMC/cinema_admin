<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ URL::to('index') }}" class="brand-link">
      <img src="{{ asset('public/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">T-Cinema</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Võ Thanh Tấn</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ URL::to('index') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Trang Tổng Quan
              </p>
            </a>
          </li>
          
          <!--tables-thong-tin-khach-hang-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Khách Hàng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{  route('taikhoan.index') }}" class="nav-link">
                  
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('taikhoan.them') }}" class="nav-link">
                  
                  <p>Thêm</p>
                </a>
              </li>
            </ul>
          </li>
          <!--endtables-->
          <!--tables-dao-dien-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Đạo diễn
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('daodien.index')}}" class="nav-link">
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
            </ul>
          </li>
          <!--endtables-->
          <!--tables-dao-dien-->
          {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Diễn viên
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('dienvien.index')}}" class="nav-link">
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
            </ul>
          </li> --}}
          <!--endtables-->
          <!--tables-thong-tin-phim-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Phim
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('phim.index') }}" class="nav-link">  
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
            </ul>
          </li>
          <!--endtables-->
          <!--tables-the-loai-phim-->
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Thể Loại Phim
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('theloai.index') }}" class="nav-link">
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
            </ul>
          </li>
          <!--endtables-->
          <!--tables-ding-dang-phim-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Định Dạng Phim
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">

                <a href=" {{ route('dinhdang.index') }}" class="nav-link">
                  
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('dinhdang.them') }}" class="nav-link">
                  
                  <p>Thêm</p>
                </a>
              </li>

            </ul>
          </li>
          <!--endtables-->
          <!--tables-trang-thai-phim-->
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Trạng Thái Phim
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">

                <a href=" {{ route('trangthai.index') }}" class="nav-link">
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('trangthai.them') }}" class="nav-link">
                  <p>Thêm</p>
                </a>
              </li>
             
            </ul>
          <!--endtables-->
          <!--tables-thong-tin-rap-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Rap
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  
                  <p>Thêm</p>
                </a>
              </li>

            </ul>
          </li>
          <!--endtables-->
          <!--tables-loai-ghe-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Loại Ghế
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ URL::to('data_loaighe')}}" class="nav-link">
                  
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::to('them_loaighe') }}" class="nav-link">
                  
                  <p>Thêm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::to('sua_loaighe') }}" class="nav-link">
                  
                  <p>Sửa</p>
                </a>
              </li>

            </ul>
          </li>
          <!--endtables-->
          <!--tables-thong-tin-lich-chiueu-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Lịch Chiếu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ URL::to('data_lichchieu')}}" class="nav-link">
                  
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::to('them_lichchieu') }}" class="nav-link">
                  
                  <p>Thêm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::to('sua_lichchieu') }}" class="nav-link">
                  <p>Sửa</p>
                </a>
              </li>

            </ul>
          </li>
          <!--endtables-->
          <!--tables-suat-chieu-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Suất Chiếu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ URL::to('data_suatchieu')}}" class="nav-link">
                  
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::to('them_suatchieu') }}" class="nav-link">
                  
                  <p>Thêm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ URL::to('sua_suatchieu') }}" class="nav-link">
                  
                  <p>Sửa</p>
                </a>
              </li>

            </ul>
          </li>
          <!--endtables-->

          <!--tables-ve-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Vé
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('ve.index') }}" class="nav-link">
                  
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
                      
            </ul>
          </li>
          <!--endtables-->

          <!--tables-danh-sach-ve-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Danh Sách Vé
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('dsve.index') }}" class="nav-link">
                  
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
              

            </ul>
          </li>
          <!--endtables-->
          <!--tables-binh-luan-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Thông Tin Bình Luận
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('binhluan.index') }}" class="nav-link">
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
            </ul>
          </li>
          <!--endtables-->
          <!--tables-phan-hoi-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Thông Tin Phản Hồi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{ route('phanhoi.index') }}" class="nav-link">
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
            </ul>
          </li>
          <!--endtables-->
          <!--tables-gia-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Giá
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">

                <a href=" {{ route('gia.index') }}" class="nav-link">
                  <p>Dữ Liệu Bảng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('gia.them') }}" class="nav-link">
                  <p>Thêm</p>
                </a>
              </li>
            </ul>
          </li>
          <!--endtables-->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>