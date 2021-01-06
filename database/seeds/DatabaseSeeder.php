<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TheLoaiPhimDatabaseSeeder::class);
        $this->call(TrangThaiPhimDatabaseSeeder::class);
        $this->call(DaoDienDatabaseSeeder::class);
        $this->call(GiaDatabaseSeeder::class);
        $this->call(DinhDangPhimDatabaseSeeder::class);
		$this->call(PhimDatabaseSeeder::class);
        $this->call(LoaiGheDatabaseSeeder::class);
        $this->call(RapDatabaseSeeder::class);
        $this->call(GheDatabaseSeeder::class);
        $this->call(TaikhoanDatabaseSeeder::class);
        $this->call(BinhluanDatabaseSeeder::class);
		$this->call(PhanhoiDatabaseSeeder::class);
		$this->call(SuatChieuDatabaseSeeder::class);
        $this->call(LichchieuDatabaseSeeder::class);
        $this->call(DS_VeDatabaseSeeder::class);
        $this->call(VeDatabaseSeeder::class);
        $this->call(UserDatabaseSeeder::class);
    }
}
class UserDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('users')->insert([
			['name'=>'Admin','email'=>'admin@gmail.com','password'=>bcrypt('1234')]
		]);
	}
}
class DaoDienDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('dao_diens')->insert([
			['Tendaodien'=>'Victor Vũ','Ngaysinh'=>'1975-12-11','Gioitinh'=>'Nam'],
			['Tendaodien'=>'Trần Anh Hùng','Ngaysinh'=>'1975-2-11','Gioitinh'=>'Nam'],
			['Tendaodien'=>'Vũ Ngọc Đăng','Ngaysinh'=>'1933-10-11','Gioitinh'=>'Nam'],
			['Tendaodien'=>'Nguyễn Quang Dũng','Ngaysinh'=>'1465-10-11','Gioitinh'=>'Nam'],
            ['Tendaodien'=>'Charlie Nguyễn','Ngaysinh'=>'1075-10-11','Gioitinh'=>'Nam'],
            
            ['Tendaodien'=>'Trần Hàm','Ngaysinh'=>'1975-10-11','Gioitinh'=>'Nam'],
			['Tendaodien'=>'Lê Hoàng','Ngaysinh'=>'1975-10-11','Gioitinh'=>'Nam'],
			['Tendaodien'=>'Dustin Nguyễn','Ngaysinh'=>'1975-2-11','Gioitinh'=>'Nam'],
			['Tendaodien'=>'Trần Lam Anh','Ngaysinh'=>'1975-10-11','Gioitinh'=>'Nữ'],
            ['Tendaodien'=>'Bạch Diệp','Ngaysinh'=>'1075-10-11','Gioitinh'=>'Nữ'],
            
            ['Tendaodien'=>'Steven SpielBerg','Ngaysinh'=>'1975-10-11','Gioitinh'=>'Nữ'],
			['Tendaodien'=>'Oliver Stone','Ngaysinh'=>'1975-10-11','Gioitinh'=>'Nữ'],
			['Tendaodien'=>'Anthony Russo','Ngaysinh'=>'1975-2-11','Gioitinh'=>'Nam'],
			['Tendaodien'=>'Joe Russo','Ngaysinh'=>'1975-10-11','Gioitinh'=>'Nam'],
            ['Tendaodien'=>'Peter Jackson','Ngaysinh'=>'1075-10-11','Gioitinh'=>'Nam']
		]);
	}
}
class TheLoaiPhimDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('the_loais')->insert([
			['Tentheloai'=>'Kinh dị'],
			['Tentheloai'=>'Hành Động'],
			['Tentheloai'=>'Hài hước'],
			['Tentheloai'=>'Võ Thuật'],
			['Tentheloai'=>'Tình cảm'],
			['Tentheloai'=>'Viễn tưởng'],
			['Tentheloai'=>'Hoạt hình'],
			['Tentheloai'=>'Chiến trang'],
            ['Tentheloai'=>'Tâm lý'],
            ['Tentheloai'=>'Truyền Hình ']
		]);
	}
}
class TrangThaiPhimDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('trang_thais')->insert([
			['Tentrangthai'=>'Phim sắp chiếu'],
			['Tentrangthai'=>'Phim đang chiếu'],
			['Tentrangthai'=>'Phim ngừng chiếu']
		]);
	}
}
class GiaDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('gias')->insert([
			['giatien'=>'20000'],
			['giatien'=>'30000'],
            ['giatien'=>'40000'],
            ['giatien'=>'50000'],
			['giatien'=>'60000'],
			['giatien'=>'70000'],
		]);
	}
}
class DinhDangPhimDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('dinh_dangs')->insert([
			['Loaidinhdang'=>'2D','Gia_id'=>'1'],
			['Loaidinhdang'=>'3D','Gia_id'=>'2'],
			['Loaidinhdang'=>'4D','Gia_id'=>'3']
		]);
	}
}
class LoaiGheDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('loai_ghes')->insert([
			['Tenloaighe'=>'thường','gia_id'=>'1'],
			['Tenloaighe'=>'trung bình','gia_id'=>'2'],
			['Tenloaighe'=>'VIP','gia_id'=>'3']
		]);
	}
}
class RapDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('raps')->insert([
			['Tenrap'=>'CGV Gò Vấp','hang'=>'5','cot'=>'6'],
            ['Tenrap'=>'CGV Nguyễn Trãi','hang'=>'5','cot'=>'6'],
        ]);
	}
}
class GheDatabaseSeeder extends Seeder
{
	public function run() {

        //Chi Nhánh 1
        for ($i=0; $i < 3; $i++) { 
            for ($j=0; $j < 10; $j++) {
                if($i == 0)
                {
                    DB::table('ghes')->insert([
                        ['Soghe'=>''.$i.$j,'Loaighe_id'=>'3','Trangthai'=>'0','rap_id'=>'1']
                    ]);
                }
                else if($i == 1)
                {
                    DB::table('ghes')->insert([
                        ['Soghe'=>''.$i.$j,'Loaighe_id'=>'2','Trangthai'=>'0','rap_id'=>'1']
                    ]);
                }
                else
                {
                    DB::table('ghes')->insert([
                        ['Soghe'=>''.$i.$j,'Loaighe_id'=>'1','Trangthai'=>'0','rap_id'=>'1']
                    ]);
                }
            }
        }

        for ($i=0; $i < 3; $i++) { 
            for ($j=0; $j < 10; $j++) {
                if($i == 0)
                {
                    DB::table('ghes')->insert([
                        ['Soghe'=>''.$i.$j,'Loaighe_id'=>'3','Trangthai'=>'0','rap_id'=>'2']
                    ]);
                }
                else if($i == 1)
                {
                    DB::table('ghes')->insert([
                        ['Soghe'=>''.$i.$j,'Loaighe_id'=>'2','Trangthai'=>'0','rap_id'=>'2']
                    ]);
                }
                else
                {
                    DB::table('ghes')->insert([
                        ['Soghe'=>''.$i.$j,'Loaighe_id'=>'1','Trangthai'=>'0','rap_id'=>'2']
                    ]);
                }
            }
        }
	}
}
class PhimDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('phims')->insert([
			['Tenphim'=>'Dios', 'Hinhanh'=>'Adios.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
			'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'hQj_vwovvrs','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1', 'daodien_id'=>'1','trangthai_id'=>'1','theloai_id'=>'1'],     
            ['Tenphim'=>'Alice', 'Hinhanh'=>'Alice.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'3xBd8wXlj9o','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'2','trangthai_id'=>'1','theloai_id'=>'1'],
            
            ['Tenphim'=>'Bố Già', 'Hinhanh'=>'BoGia.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'2zSzDlaN-9w','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'3','trangthai_id'=>'2','theloai_id'=>'1'],
            
            ['Tenphim'=>'Emily In Paris', 'Hinhanh'=>'EmilyInParis.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'bagpW4TbVQY','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'4','trangthai_id'=>'1','theloai_id'=>'1'], 
            
            ['Tenphim'=>'A Trash Truck', 'Hinhanh'=>'ATrashTruck.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'i2UT4DQUfMg','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'2','trangthai_id'=>'1','theloai_id'=>'1'],
            
            ['Tenphim'=>'Im Your Women', 'Hinhanh'=>'ImYourWomen.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'fAveuCPBYSw','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'5','trangthai_id'=>'2','theloai_id'=>'1'],
            
            ['Tenphim'=>'Kimmy', 'Hinhanh'=>'Kimmy.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'Hl4bOuGNMwo','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'2','trangthai_id'=>'1','theloai_id'=>'1'],
            
            ['Tenphim'=>'Oh! My Gran', 'Hinhanh'=>'OhMyGran.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'7h-sUzb1YGg','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'3','trangthai_id'=>'2','theloai_id'=>'1'],
            
            ['Tenphim'=>'Start Up', 'Hinhanh'=>'StartUp.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'Vx4pWud8luk','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'4','trangthai_id'=>'1','theloai_id'=>'1'],
            
            ['Tenphim'=>'Sweet Home', 'Hinhanh'=>'SweetHome.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'7rI56NmD33Y','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'5','trangthai_id'=>'2','theloai_id'=>'1'],
            
            ['Tenphim'=>'TorBaaz', 'Hinhanh'=>'TorBaaz.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'stbAOQiNMdk','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'5','trangthai_id'=>'2','theloai_id'=>'1'],
            
            ['Tenphim'=>'The Croods', 'Hinhanh'=>'TheCroods.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'GkXeVIfbJOw','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'4','trangthai_id'=>'1','theloai_id'=>'1'],
            
            ['Tenphim'=>'Winter War', 'Hinhanh'=>'WinterWar.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'jtpp0ojz7ks','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'5','trangthai_id'=>'2','theloai_id'=>'1'],
            
            ['Tenphim'=>'Words On BathRoom', 'Hinhanh'=>'WordsOnBathRoom.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'_rjAHs9HIcA','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'5','trangthai_id'=>'2','theloai_id'=>'1'],
            
            ['Tenphim'=>'Black Bear', 'Hinhanh'=>'BlackBear.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'1_gCDYMGnng','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'3','trangthai_id'=>'2','theloai_id'=>'1'],
            
            ['Tenphim'=>'Wonder Women', 'Hinhanh'=>'WWM86.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'Vk-gqL3c5qU','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'4','trangthai_id'=>'1','theloai_id'=>'1'],
           
            ['Tenphim'=>'Lời nói khắc trong tim', 'Hinhanh'=>'YourName.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'KiCn0UKtOuc','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'5','trangthai_id'=>'2','theloai_id'=>'1'],
            
            ['Tenphim'=>'Patients Of Sant', 'Hinhanh'=>'PatientsOfSant.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'7tsZxJidn4o','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'5','trangthai_id'=>'2','theloai_id'=>'1'],
            
            ['Tenphim'=>'Phi vụ hoàn lương', 'Hinhanh'=>'PhiVuHoanLuon.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'ijwyhBl15ZA','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'5','trangthai_id'=>'2','theloai_id'=>'1'],
            
            ['Tenphim'=>'Triệu tử long', 'Hinhanh'=>'XinZhao.jpg','Diem'=>'7','Mota'=>'Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.',
            'Ds_dienvien'=>'Thái Hoà, Đức Thịnh, Hồng Ánh, Hứa Vỹ Văn, Kiều Minh Tuấn','Trailer'=>'-YGdJnLMSOA','ThoiLuong'=>'01:00:00','dinhdang_id'=>'1','daodien_id'=>'5','trangthai_id'=>'2','theloai_id'=>'1']
		
            ]);
	}
}
class TaikhoanDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('tai_khoans')->insert([
			['HoTen'=>'Võ Thanh Tấn','Ten_TK'=>'tan','matkhau'=>Crypt::encryptString('123'),'Email'=>'tan@gmail.com','Ngaysinh'=>'2000-02-19','Phai'=>'nam','SDT'=>'0153623460','Diachi'=>'Số 9/ Lý Phục Man, Q.7, Tp.HCM', 'Admin'=>'0', 'Tien_TK'=>'1000000'],
            ['HoTen'=>'Cao Minh Thông','Ten_TK'=>'thong','matkhau'=>Crypt::encryptString('123'),'Email'=>'thong@gmail.com','Ngaysinh'=>'2000-02-19','Phai'=>'nam','SDT'=>'0142783590','Diachi'=>'Số 9/ Lý Phục Man, Q.7, Tp.HCM', 'Admin'=>'0', 'Tien_TK'=>'1000000'],
            ['HoTen'=>'Lê Hoàng Huy', 'Ten_TK'=>'Huy', 'matkhau'=>Crypt::encryptString('123'), 'Email'=>'huy@gmail.com', 'Ngaysinh'=>'2000-02-19', 'Phai'=>'nam', 'SDT'=>'012356789', 'Diachi'=>'Số 9/ Lý Phục Man, Q.7, Tp.HCM', 'Admin'=>'0', 'Tien_TK'=>'1000000'],
			['HoTen'=>'Trương Hữu Chinh','Ten_TK'=>'Chinh','matkhau'=>Crypt::encryptString('123'),'Email'=>'chinh@gmail.com','Ngaysinh'=>'2000-02-19','Phai'=>'nam','SDT'=>'0153723460','Diachi'=>'Số 9/ Lý Phục Man, Q.7, Tp.HCM', 'Admin'=>'0', 'Tien_TK'=>'1000000'],
            ['HoTen'=>'Hà Quốc Thịnh','Ten_TK'=>'Thinh','matkhau'=>Crypt::encryptString('123'),'Email'=>'thinh@gmail.com','Ngaysinh'=>'2000-02-19','Phai'=>'nam','SDT'=>'0142578359','Diachi'=>'Số 9/ Lý Phục Man, Q.7, Tp.HCM', 'Admin'=>'0', 'Tien_TK'=>'1000000'],
            ['HoTen'=>'Huỳnh Vinh Phát','Ten_TK'=>'Phat','matkhau'=>Crypt::encryptString('123'),'Email'=>'phat@gmail.com','Ngaysinh'=>'2000-02-19','Phai'=>'nam','SDT'=>'0657876546','Diachi'=>'Số 9/ Lý Phục Man, Q.7, Tp.HCM', 'Admin'=>'0','Tien_TK'=>'1000000'],
            ['HoTen'=>'Lê Tuấn Nhật', 'Ten_TK'=>'Nhat', 'matkhau'=>Crypt::encryptString('123'), 'Email'=>'nhat@gmail.com', 'Ngaysinh'=>'2000-02-19', 'Phai'=>'nam', 'SDT'=>'0572497845', 'Diachi'=>'Số 9/ Lý Phục Man, Q.7, Tp.HCM', 'Admin'=>'0','Tien_TK'=>'1000000'],
			['HoTen'=>'Lương Huỳnh Yến Nhi','Ten_TK'=>'Nhi','matkhau'=>Crypt::encryptString('123'),'Email'=>'nhi@gmail.com','Ngaysinh'=>'2000-02-19','Phai'=>'nữ','SDT'=>'0775363253','Diachi'=>'Số 9/ Lý Phục Man, Q.7, Tp.HCM', 'Admin'=>'0','Tien_TK'=>'1000000'],
			['HoTen'=>'Lê Thị Thanh Trúc','Ten_TK'=>'Truc','matkhau'=>Crypt::encryptString('123'),'Email'=>'truc@gmail.com','Ngaysinh'=>'2000-02-19','Phai'=>'nữ','SDT'=>'0667447673','Diachi'=>'Số 9/ Lý Phục Man, Q.7, Tp.HCM', 'Admin'=>'0','Tien_TK'=>'1000000']
		]);
	}
}
class BinhluanDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('binh_luans')->insert([
			['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'1','phim_id'=>'1'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'2','phim_id'=>'1'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'3','phim_id'=>'1'],
            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'4','phim_id'=>'1'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'5','phim_id'=>'1'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'6','phim_id'=>'1'],
            
            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'1','phim_id'=>'2'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'2','phim_id'=>'2'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'3','phim_id'=>'2'],
            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'4','phim_id'=>'2'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'5','phim_id'=>'2'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'6','phim_id'=>'2'],

            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'1','phim_id'=>'3'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'2','phim_id'=>'3'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'3','phim_id'=>'3'],
            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'4','phim_id'=>'3'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'5','phim_id'=>'3'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'6','phim_id'=>'3'],

            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'1','phim_id'=>'4'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'2','phim_id'=>'4'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'3','phim_id'=>'4'],
            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'4','phim_id'=>'4'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'5','phim_id'=>'4'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'6','phim_id'=>'4'],

            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'1','phim_id'=>'5'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'2','phim_id'=>'5'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'3','phim_id'=>'5'],
            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'4','phim_id'=>'5'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'5','phim_id'=>'5'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'6','phim_id'=>'5'],

            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'1','phim_id'=>'6'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'2','phim_id'=>'6'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'7','phim_id'=>'6'],
            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'8','phim_id'=>'6'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'9','phim_id'=>'6'],

            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'1','phim_id'=>'7'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'2','phim_id'=>'7'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'7','phim_id'=>'7'],
            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'8','phim_id'=>'7'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'9','phim_id'=>'7'],
		]);
	}
}
class PhanhoiDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('phan_hois')->insert([
			['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'1','binhluan_id'=>'1'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'2','binhluan_id'=>'2'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'3','binhluan_id'=>'3'],
            ['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'4','binhluan_id'=>'4'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'5','binhluan_id'=>'5'],
            
            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'6','binhluan_id'=>'6'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'7','binhluan_id'=>'7'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'8','binhluan_id'=>'8'],
            ['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'9','binhluan_id'=>'9'],
            
            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'6','binhluan_id'=>'1'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'7','binhluan_id'=>'2'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'8','binhluan_id'=>'3'],
            ['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'9','binhluan_id'=>'4'],
            
            ['Noidung'=>'phim hay', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'1','binhluan_id'=>'6'],
			['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'2','binhluan_id'=>'7'],
            ['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'3','binhluan_id'=>'8'],
            ['Noidung'=>'phim dở', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'4','binhluan_id'=>'9'],
			['Noidung'=>'phim chán', 'Ngaydang'=>'2000-11-25','taikhoan_id'=>'5','binhluan_id'=>'10']
		]);
	}
}
class SuatChieuDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('suat_chieus')->insert([
			['GioChieu'=>'09:00:00'],
            ['GioChieu'=>'11:00:00'],
			['GioChieu'=>'13:00:00'],
			['GioChieu'=>'15:00:00'],
			['GioChieu'=>'17:00:00'],
			['GioChieu'=>'19:00:00']
		]);
	}
}
class LichchieuDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('lich_chieus')->insert([
			['phim_id'=>'1','rap_id'=>'1','suatchieu_id'=>'1', 'NgayChieu'=>'2021-01-01'],
			['phim_id'=>'2','rap_id'=>'1','suatchieu_id'=>'2', 'NgayChieu'=>'2021-01-01'],
			['phim_id'=>'3','rap_id'=>'1','suatchieu_id'=>'3', 'NgayChieu'=>'2021-01-01'],
			['phim_id'=>'1','rap_id'=>'2','suatchieu_id'=>'4', 'NgayChieu'=>'2021-01-01'],
			['phim_id'=>'2','rap_id'=>'2','suatchieu_id'=>'5', 'NgayChieu'=>'2021-01-01'],
            ['phim_id'=>'3','rap_id'=>'2','suatchieu_id'=>'6', 'NgayChieu'=>'2021-01-01'],
            
            ['phim_id'=>'4','rap_id'=>'1','suatchieu_id'=>'1', 'NgayChieu'=>'2021-01-01'],
			['phim_id'=>'5','rap_id'=>'1','suatchieu_id'=>'2', 'NgayChieu'=>'2021-01-01'],
			['phim_id'=>'6','rap_id'=>'1','suatchieu_id'=>'3', 'NgayChieu'=>'2021-01-01'],
			['phim_id'=>'4','rap_id'=>'2','suatchieu_id'=>'4', 'NgayChieu'=>'2021-01-01'],
			['phim_id'=>'5','rap_id'=>'2','suatchieu_id'=>'5', 'NgayChieu'=>'2021-01-01'],
			['phim_id'=>'6','rap_id'=>'2','suatchieu_id'=>'6', 'NgayChieu'=>'2021-01-01']
		]);
	}
}
class DS_VeDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('ds_ves')->insert([
			['Soluong'=>'1','Tongtien'=>'40000','taikhoan_id'=>'2'],
			['Soluong'=>'2','Tongtien'=>'80000','taikhoan_id'=>'3']	
		]);
	}
}
class VeDatabaseSeeder extends Seeder
{
	public function run() {
		DB::table('ves')->insert([
			['dsve_id'=>'1','ghe_id'=>'1','phim_id'=>'1', 'Thanhtien'=>'40000', 'suatchieu_id'=>'1', 'NgayChieu' => '2021-01-01'],
			['dsve_id'=>'2','ghe_id'=>'2','phim_id'=>'2', 'Thanhtien'=>'40000', 'suatchieu_id'=>'2', 'NgayChieu' => '2021-01-01'],
			['dsve_id'=>'2','ghe_id'=>'4','phim_id'=>'2', 'Thanhtien'=>'40000', 'suatchieu_id'=>'3', 'NgayChieu' => '2021-01-01']
		]);
	}
}
