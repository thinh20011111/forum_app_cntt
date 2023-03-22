<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('123456'),
                'level' => 2,
                'avatar' => 'user1.jpg',
            ],
            [
                'id' => 2,
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('123456'),
                'level' => 1,
                'avatar' => 'user2.jpg',
            ],
            [
                'id' => 3,
                'name' => 'user3',
                'email' => 'user3@gmail.com',
                'password' => Hash::make('123456'),
                'level' => 1,
                'avatar' => 'user3.jpg',
            ],
        ]);

        DB::table('topics')->insert([
            [
                'id' => 1,
                'name' => 'Thắc mắc, góp ý',
            ],
            [
                'id' => 2,
                'name' => 'Hỏi đáp',
            ],
            [
                'id' => 3,
                'name' => 'CLB - Hội -Nhóm',
            ],
            [
                'id' => 4,
                'name' => 'Tâm sự thanh niên',
            ],
            [
                'id' => 5,
                'name' => 'Khám phá',
            ],
            [
                'id' => 6,
                'name' => 'Thư giãn',
            ],
        ]);

        DB::table('types')->insert([
            [
                'id' => 1,
                'name' => 'Nội dung học tập',
            ],
            [
                'id' => 2,
                'name' => 'Nội dung cộng đồng',
            ],
        ]);

        DB::table('subjects')->insert([
            //Khoa CNPM
            [
                'id' => 1,
                'name' => 'Tin học cơ sở',
                'specialized_id' => '1',
            ],
            [
                'id' => 2,
                'name' => 'Độ phức tạp thuật toán',
                'specialized_id' => '1',
            ], 
            [
                'id' => 3,
                'name' => 'Kỹ thuật lập trình',
                'specialized_id' => '1',
            ],
            [
                'id' => 4,
                'name' => 'Cấu trúc dữ liệu và giải thuật',
                'specialized_id' => '1',
            ],
            [
                'id' => 5,
                'name' => 'Cơ sở dữ liệu',
                'specialized_id' => '1',
            ],
            [
                'id' => 6,
                'name' => 'Nhập môn Công nghệ phần mềm',
                'specialized_id' => '1',
            ],
            [
                'id' => 7,
                'name' => 'Quản lý dự án phần mềm',
                'specialized_id' => '1',
            ],
            [
                'id' => 8,
                'name' => 'Phân tích yêu cầu phần mềm',
                'specialized_id' => '1',
            ],
            [
                'id' => 9,
                'name' => 'Kiến trúc và thiết kế phần mềm',
                'specialized_id' => '1',
            ],
            [
                'id' => 10,
                'name' => 'Xây dựng và phát triển phần mềm',
                'specialized_id' => '1',
            ],
            [
                'id' => 11,
                'name' => 'Kiểm thử và đảm bảo chất lượng phần mềm',
                'specialized_id' => '1',
            ],
            [
                'id' => 12,
                'name' => 'Lập trình hướng đối tượng',
                'specialized_id' => '1',
            ],
            [
                'id' => 13,
                'name' => 'Hệ quản trị cơ sở dữ liệu 1',
                'specialized_id' => '1',
            ],
            [
                'id' => 14,
                'name' => 'Lập trình .NET',
                'specialized_id' => '1',
            ],
            [
                'id' => 15,
                'name' => 'Phát triển ứng dụng web',
                'specialized_id' => '1',
            ],
            [
                'id' => 16,
                'name' => 'Phát triển ứng dụng web 2',
                'specialized_id' => '1',
            ],
            [
                'id' => 17,
                'name' => 'Lập trình JAVA',
                'specialized_id' => '1',
            ],
            [
                'id' => 18,
                'name' => 'Kiểm thử và bảo mật ứng dụng web',
                'specialized_id' => '1',
            ],
            [
                'id' => 19,
                'name' => 'Phát triển phần mềm phân tán',
                'specialized_id' => '1',
            ],
            [
                'id' => 20,
                'name' => 'Linux và phần mềm nguồn mở',
                'specialized_id' => '1',
            ],
            [
                'id' => 21,
                'name' => 'Phát triển ứng dụng GIS',
                'specialized_id' => '1',
            ],
            [
                'id' => 22,
                'name' => 'Thương mại điện tử',
                'specialized_id' => '1',
            ],
            [
                'id' => 23,
                'name' => 'Hệ thống hoạch định nguồn lực doanh nghiệp',
                'specialized_id' => '1',
            ],

            //BM KHMT
            [
                'id' => 24,
                'name' => 'TIN HỌC ĐẠI CƯƠNG',
                'specialized_id' => '2',
            ],
            [
                'id' => 25,
                'name' => 'KIẾN TRÚC MÁY TÍNH VÀ VI XỬ LÝ',
                'specialized_id' => '2',
            ],
            [
                'id' => 26,
                'name' => 'NGUYÊN LÝ HỆ ĐIỀU HÀNH',
                'specialized_id' => '2',
            ],
            [
                'id' => 27,
                'name' => 'PHÂN TÍCH VÀ THIẾT KẾ HỆ THỐNG',
                'specialized_id' => '2',
            ],
            [
                'id' => 28,
                'name' => 'QUẢN LÝ CÁC PHIÊN BẢN PHẦN MỀM',
                'specialized_id' => '2',
            ],
            [
                'id' => 29,
                'name' => 'KHAI PHÁ DỮ LIỆU WEB',
                'specialized_id' => '2',
            ],
            [
                'id' => 30,
                'name' => 'PHÂN TÍCH VÀ THIẾT KẾ HỆ THỐNG HƯỚNG ĐỐI TƯỢNG',
                'specialized_id' => '2',
            ],
            [
                'id' => 31,
                'name' => 'CHƯƠNG TRÌNH DỊCH',
                'specialized_id' => '2',
            ],
            [
                'id' => 32,
                'name' => 'TRÍ TUỆ NHÂN TẠO',
                'specialized_id' => '2',
            ],
            [
                'id' => 33,
                'name' => 'HỌC MÁY',
                'specialized_id' => '2',
            ],
            [
                'id' => 34,
                'name' => '	THIẾT KẾ GIAO DIỆN WEB',
                'specialized_id' => '2',
            ],
            [
                'id' => 35,
                'name' => 'PHÁT TRIỂN WEB FRONT-END',
                'specialized_id' => '2',
            ],
            [
                'id' => 36,
                'name' => 'PHÁT TRIỂN WEB FRONT-END 2',
                'specialized_id' => '2',
            ],
            [
                'id' => 37,
                'name' => 'PHÁT TRIỂN WEB BACK-END',
                'specialized_id' => '2',
            ],
            [
                'id' => 38,
                'name' => 'PHÁT TRIỂN WEB BACK-END 2',
                'specialized_id' => '2',
            ],
            [
                'id' => 39,
                'name' => 'NGUYÊN LÝ TRUYỀN THÔNG KHÔNG DÂY',
                'specialized_id' => '2',
            ],
            [
                'id' => 40,
                'name' => 'PHÁT TRIỂN ỨNG DỤNG WEB CƠ BẢN',
                'specialized_id' => '2',
            ],
            [
                'id' => 41,
                'name' => 'QUẢN LÝ VÀ XÂY DỰNG CHÍNH SÁCH AN TOÀN THÔNG TIN',
                'specialized_id' => '2',
            ],
            [
                'id' => 42,
                'name' => 'KHOA HỌC DỮ LIỆU',
                'specialized_id' => '2',
            ],
            [
                'id' => 43,
                'name' => 'PHÂN TÍCH NGHIỆP VỤ',
                'specialized_id' => '2',
            ],
            [
                'id' => 44,
                'name' => 'HỌC SÂU',
                'specialized_id' => '2',
            ],
            [
                'id' => 45,
                'name' => 'HỆ KHUYẾN NGHỊ',
                'specialized_id' => '2',
            ],
            [
                'id' => 46,
                'name' => 'HỆ HỖ TRỢ RA QUYẾT ĐỊNH',
                'specialized_id' => '2',
            ],
            [
                'id' => 47,
                'name' => 'PHÂN TÍCH DỮ LIỆU LỚN',
                'specialized_id' => '2',
            ],
            [
                'id' => 48,
                'name' => 'MẬT MÃ VÀ AN TOÀN THÔNG TIN',
                'specialized_id' => '2',
            ],
            [
                'id' => 49,
                'name' => 'XỬ LÝ NGÔN NGỮ TỰ NHIÊN',
                'specialized_id' => '2',
            ],
            [
                'id' => 50,
                'name' => 'THỰC TẬP CHUYÊN NGÀNH 1',
                'specialized_id' => '2',
            ],
            [
                'id' => 51,
                'name' => 'THỰC TẬP CHUYÊN NGÀNH 2',
                'specialized_id' => '2',
            ],

            //BM Mạng và HTTT
            [
                'id' => 52,
                'name' => 'Phương pháp tính',
                'specialized_id' => '3',
            ],
            [
                'id' => 53,
                'name' => 'Toán rời rạc',
                'specialized_id' => '3',
            ],
            [
                'id' => 54,
                'name' => 'An toàn thông tin',
                'specialized_id' => '3',
            ],
            [
                'id' => 55,
                'name' => 'Cơ sở mã hóa thông tin',
                'specialized_id' => '3',
            ],
            [
                'id' => 56,
                'name' => 'Tối ưu hóa',
                'specialized_id' => '3',
            ],
            [
                'id' => 57,
                'name' => 'Thiết kế và QL DA CNTT',
                'specialized_id' => '3',
            ],
            [
                'id' => 58,
                'name' => 'Các mô hình toán tài chính',
                'specialized_id' => '3',
            ],
            [
                'id' => 59,
                'name' => 'Hệ thống thông tin quản lý',
                'specialized_id' => '3',
            ],
            [
                'id' => 60,
                'name' => 'Hệ hỗ trợ ra quyết định',
                'specialized_id' => '3',
            ],
            [
                'id' => 61,
                'name' => 'Hệ cơ sở tri thức',
                'specialized_id' => '3',
            ],
            [
                'id' => 62,
                'name' => 'Độ phức tạp thuật toán',
                'specialized_id' => '3',
            ],
            [
                'id' => 63,
                'name' => 'Mật mã và ứng dụng',
                'specialized_id' => '3',
            ],
            [
                'id' => 64,
                'name' => 'Đánh giá kiểm định AT HTTT',
                'specialized_id' => '3',
            ],

            //BM Toán
            [
                'id' => 65,
                'name' => 'Mã hóa và an toàn dữ liệu (Cao học)',
                'specialized_id' => '4',
            ],
            [
                'id' => 66,
                'name' => 'Các mô hình và phương pháp tối ưu (Cao học)',
                'specialized_id' => '4',
            ],
            [
                'id' => 67,
                'name' => 'Toán cao cấp',
                'specialized_id' => '4',
            ],
            [
                'id' => 68,
                'name' => 'Toán cao cấp 1',
                'specialized_id' => '4',
            ],
            [
                'id' => 69,
                'name' => 'Toán cao cấp 2',
                'specialized_id' => '4',
            ],
            [
                'id' => 70,
                'name' => 'Xác suất thống kê',
                'specialized_id' => '4',
            ],
            [
                'id' => 71,
                'name' => 'Giải tích',
                'specialized_id' => '4',
            ],
            [
                'id' => 72,
                'name' => 'Giải tích 1',
                'specialized_id' => '4',
            ],
            [
                'id' => 73,
                'name' => 'Giải tích 2',
                'specialized_id' => '4',
            ],
            [
                'id' => 74,
                'name' => 'Toán giải tích',
                'specialized_id' => '4',
            ],
            [
                'id' => 75,
                'name' => 'Đại số tuyến tính',
                'specialized_id' => '4',
            ],
            [
                'id' => 76,
                'name' => 'Toán học 1, 2 (Chương trình tiến tiến)',
                'specialized_id' => '4',
            ],
            [
                'id' => 77,
                'name' => 'Thống kê ứng dụng trong KHNN',
                'specialized_id' => '4',
            ],
            [
                'id' => 78,
                'name' => 'Phân tích số liệu',
                'specialized_id' => '4',
            ],
            [
                'id' => 79,
                'name' => 'XSTK ứng dụng trong KHNN',
                'specialized_id' => '4',
            ],
            [
                'id' => 80,
                'name' => 'Cơ sở Toán cho các nhà Kinh tế 1, 2',
                'specialized_id' => '4',
            ],

            //BM Vật lý
            [
                'id' => 81,
                'name' => 'Vật lý đại cương A',
                'specialized_id' => '5',
            ],
            [
                'id' => 82,
                'name' => 'Vật lý đại cương A2',
                'specialized_id' => '5',
            ],
            [
                'id' => 83,
                'name' => 'Vật lý',
                'specialized_id' => '5',
            ],
            [
                'id' => 84,
                'name' => 'Lý sinh',
                'specialized_id' => '5',
            ],
            [
                'id' => 85,
                'name' => 'Thực hành vật lý đại cương',
                'specialized_id' => '5',
            ],
            [
                'id' => 86,
                'name' => 'Vật lý đại cương 1 – Principle of Physics 1 (dạy bằng tiếng anh)',
                'specialized_id' => '5',
            ],
            [
                'id' => 87,
                'name' => 'Vật lý đại cương 2 – Principle of Physics 2 (dạy bằng tiếng anh)',
                'specialized_id' => '5',
            ],
            [
                'id' => 88,
                'name' => 'Vật lý cơ nhiệt',
                'specialized_id' => '5',
            ],
            [
                'id' => 89,
                'name' => 'Vật lý điện quang',
                'specialized_id' => '5',
            ],
            [
                'id' => 90,
                'name' => 'Cơ sở vật lý cho tin học',
                'specialized_id' => '5',
            ],
            [
                'id' => 91,
                'name' => 'Điện tử ứng dụng trong tin học',
                'specialized_id' => '5',
            ],
            [
                'id' => 92,
                'name' => 'Nguyên lý điện tử truyền thông',
                'specialized_id' => '5',
            ],
            [
                'id' => 93,
                'name' => 'Thực hành điện tử truyền thông',
                'specialized_id' => '5',
            ],
            [
                'id' => 94,
                'name' => 'Truyền dữ liệu',
                'specialized_id' => '5',
            ],
            [
                'id' => 95,
                'name' => 'Kỹ thuật truyền số liệu',
                'specialized_id' => '5',
            ],
            [
                'id' => 96,
                'name' => 'Truyền thông đa phương tiện',
                'specialized_id' => '5',
            ],
            [
                'id' => 97,
                'name' => 'Truyền thông số và mã hóa',
                'specialized_id' => '5',
            ],
            [
                'id' => 98,
                'name' => 'Truyền thông quang',
                'specialized_id' => '5',
            ],
            [
                'id' => 99,
                'name' => 'Truyền thông vệ tinh và vô tuyến',
                'specialized_id' => '5',
            ],
            
        ]);

        DB::table('specializeds')->insert([
            [
                'id' => 1,
                'name' => 'BM công nghệ phần mềm',
            ],
            [
                'id' => 2,
                'name' => 'BM khoa học máy tính',
            ],
            [
                'id' => 3,
                'name' => 'BM mạng và hệ thống thông tin',
            ],
            [
                'id' => 4,
                'name' => 'BM toán',
            ],
            [
                'id' => 5,
                'name' => 'BM vật lý',
            ],
        ]);

        DB::table('post_categories')->insert([
            [
                'id' => 1,
                'name' => 'Hỏi đáp',
            ],
            [
                'id' => 2,
                'name' => 'Thảo luận',
            ],
        ]);
    }
}
