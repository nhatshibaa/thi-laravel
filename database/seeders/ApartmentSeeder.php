<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('apartment_model')->truncate();

        \Illuminate\Support\Facades\DB::table('apartment_model')->insert([
            [
                'id' => 1,
                'apartmentName' => 'THE SAKURA - 3PN',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => 'Ngắm trọn vẹn quần thể nội khu chuẩn phong cách Nhật Bản.',
                'informationDetail' => 'Căn hộ 3PN - 2WC, diện tích 87m2.View siêu đẹp với sân tập thể thao ,bể bơi 4 mùa , thung lũng hoa Hokkaido,vườn thiền…',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/phan-khu-the-sakura-vinhomes-smart-city.1626765883454.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 2,
                'apartmentName' => 'Legacy Central',
                'address' => 'Bình Dương',
                'price' => 900,
                'information' => ' Legacy Central Thuận An Bình Dương.',
                'informationDetail' => 'Tổng diện tích: 10.089 m2.Quy mô 2 Block A và B.Tổng số căn: 1.802 căn.Số tầng: 29 tầng cao và 1 tầng hầm (1 tầng thương mại, 3 tầng gửi xe, và 26 tầng căn hộ).Diện tích căn hộ từ: 32.4m2 -59.7m2',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/1-3.1626770016565.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 3,
                'apartmentName' => 'Vinhomes Smart City - GS3',
                'address' => 'Hà Nội',
                'price' => 1200,
                'information' => 'Căn hộ 2PN siêu hiếm còn lại Tòa GS3 phân khu THE MIAMI.',
                'informationDetail' => 'Với diện tích thông thủy 54,5m2 thiết kế 2 PN với 2 ban công.Tầm view thoáng, mát nhìn sang phân khu Sakura chuẩn phong cách Nhật Bản',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/z2612497217860_7f18e8a4412d7f096c08dc73a98c55ee.1626512398235.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 4,
                'apartmentName' => 'Vinhomes Smart City - GS2',
                'address' => 'Hà Nội',
                'price' => 1100,
                'information' => 'Căn hộ 2PN siêu hiếm còn lại Tòa GS2 phân khu THE MIAMI.',
                'informationDetail' => 'Với diện tích thông thủy 54,5m2 thiết kế 2 PN với 2 ban công.Tầm view thoáng mát nhìn sang phân khu Sakura chuẩn phong cách Nhật Bản',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/z2612497217860_7f18e8a4412d7f096c08dc73a98c55ee.1626512398235.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 5,
                'apartmentName' => 'THE SAKURA',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => 'The Sakura là phân khu cao cấp mang tinh thần Nhật Bản được phát triển bởi VINHOMES và tập đoàn BĐS hàng đầu Nhật bản SAMTY.',
                'informationDetail' => 'The Sakura sở hữu tọa độ hoàng kim kết nối thuận tiên với đại lộ sầm uất Lê Trọng Tấn cùng 3 mặt thoáng trải rộng tầm mắt. Các căn hộ được thiết thông minh và tinh tế đem trải nghiệm tốt nhất đến với cư dân.',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/phan-khu-the-sakura-vinhomes-smart-city.1626765883454.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 6,
                'apartmentName' => 'VINHOMES SMART CITY 3PN 2WC',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => 'Vinhomes Smart City ra mắt phân khu mới THE SAKURA - chuẩn phong cách Nhật.',
                'informationDetail' => 'View siêu đẹp với sân tập thể thao ,bể bơi 4 mùa , thung lũng hoa Hokkaido,vườn thiền…',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/z2580232749587_a77ee0f1c9dc55fafd6245f000522da3.1626061379133.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 7,
                'apartmentName' => 'The Zei B15.03',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => '5 sao cho chất lượng cuộc sống , đó là tiêu trí của the zei. Bạn chỉ cần đến xem và bạn sẽ yêu mến noi đó..',
                'informationDetail' => 'Căn hộ 3PN - 2WC, diện tích 87m2.View siêu đẹp với sân tập thể thao ,bể bơi 4 mùa , thung lũng hoa Hokkaido,vườn thiền…',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/img_1626445389756_1626445436591.1626445515003.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 8,
                'apartmentName' => 'Vinhomes Ocean Park S2.07',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => 'Nhà được thiết kế, decor rất tâm huyết, nội thất mới xịn và đẹp, tone màu sáng mang đến cảm giác nhẹ nhàng, tươi mát.',
                'informationDetail' => 'Căn hộ 3PN - 2WC, diện tích 87m2.View siêu đẹp với sân tập thể thao ,bể bơi 4 mùa , thung lũng hoa Hokkaido,vườn thiền…',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/20210624113030-97f2_wm.1626426340072.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 9,
                'apartmentName' => 'Căn Biệt Thự Cực Đẳng Cấp Và Sang trọng',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => 'Căn Biệt Thự Cực Đẳng Cấp Và Sang trọng Tại trung Tâm Huyện Gia Lâm Dành Cho bậc ĐẠI GIA',
                'informationDetail' => 'Khuôn nhà vuông vắn, ba mặt thoáng cây xanh và ánh sáng ngập tràn. Nhà xây theo phong cách hiện đại, sang trọng, độc đáo và nội thất cao cấp. View nhìn trực tiếp Bể bơi, công viên cây xanh gần 5000 m2.',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/btdangxa9.1626346662235.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 10,
                'apartmentName' => 'Nhà Lê Thanh Nghị 168m2',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => 'Nhà thuộc phường Bách Khoa',
                'informationDetail' => 'Hiện trạng nhà 5 tầng + 1 sân với diện tích sử dụng 168m2. Mặt tiền 30m. Đường trước nhà ô tô tránh. Thuận tiện kinh doanh bất chấp mọi ngành hàng.',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/190482936_10158318188996089_9184338940100695335_n.1626364489838.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 11,
                'apartmentName' => 'The Summit 216',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => 'Tập đoàn MSH Group đã chính thức mở bán căn hộ The Summit 216 Trần Duy Hưng',
                'informationDetail' => 'The Summit 216 Trần Duy Hưng toạ lạc ngay tại mặt đường Trần Duy Hưng - Đối diện khách sạn Grand Plaza và nằm bên cạnh bệnh viện Đa Khoa Quốc Tế Thu Cúc. Căn hộ thuộc phân khúc cao cấp với sự chú trọng chất lượng công trình, phong cách thiết kế kiến trúc, lựa chọn vật liệu thiết bị hoàn thiện, cho đến ứng dụng công nghệ thông minh trong công tác quản lý và vận hành tòa nhà.',
                'thumbnail' => 'https://cenhomesvn.s3.amazonaws.com/articles/img_1880.1626338462086.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 12,
                'apartmentName' => 'Vinhomes Smart City - 2PN - 2WC',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => 'CĂN HỘ 2PN TÒA SA2 - PHÂN KHU THE SAKURA',
                'informationDetail' => 'Căn hộ bàn giao nội thất cơ bản: trần thạch cao, sàn gỗ, hệ thống điện, điều hòa,... Diện tích căn hộ: 60m2',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/a2_21.1626237089458.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 13,
                'apartmentName' => '2PN+1 VINHOMES SMART CITY',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => 'CĂN 2PN+1 TẠI S4.03 PHÂN KHU SAPPHIRE VINHOMES SMART CITY',
                'informationDetail' => 'Căn góc thiết kế vô cùng thoáng và tối ưu mang lại không gian sống năng động cho chủ nhân tương lai. View chòi nghỉ cảnh quan, sân tập Gym và các tiện ích bên dưới. Chỉ mất vài bước chân là có thể di chuyển ra công viên Sportia và đại công viên trung tâm Central Park',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/2pn-1.1626149913158.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 14,
                'apartmentName' => 'Chung cư Lê Quang Đạo',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => ' Vị trí đắc địa, cạnh siêu thị Aeon Hà Đông lớn nhất Miền Bắc, Công viên chủ đề Thiên Văn Học đầu tiên tại Việt nam.',
                'informationDetail' => 'Căn hộ 3PN - 2WC, diện tích 87m2.View siêu đẹp với sân tập thể thao ,bể bơi 4 mùa , thung lũng hoa Hokkaido,vườn thiền…',
                'thumbnail' => 'https://cenhomesvn.s3.amazonaws.com/articles/phong-khach.1624864019212.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 15,
                'apartmentName' => 'NHÀ ĐẸP PHỐ ĐÔNG TÁC',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => 'Vị trí trung tâm Đống Đa, Nhà cách mặt phố Đông Tác 50m, an ninh và dân trí cực tốt .',
                'informationDetail' => 'Nhà thiết kế đầy đủ công năng cho gia đình có 3 thế hệ sinh sống, chủ đã sắm full nội thất',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/12.1625193612193.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 16,
                'apartmentName' => 'Căn hộ STUDIO',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => 'Căn hộ nhỏ nhưng có võ .',
                'informationDetail' => 'Nằm trong quần thể đẳng cấp của 2 Cđt nức tiếng. VINHOMES - Việt Nam và SAMTY- Nhật Bản. View siêu đẹp với sân tập, bể bơi, vườn hoa, tiểu cảnh … những góc tiện ích được chau chuốt tới từng mm',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/studio.1626062093393.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 17,
                'apartmentName' => 'Căn hộ Vinhomes Ocean Park',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => 'Bán căn hộ Vinhomes Ocean Park, Hà Nội.',
                'informationDetail' => 'Full toàn bộ nội thất, bao gồm cả đồ điện tử',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/202588197_2248262681977245_5605793395098113323_n.1625539979181.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 18,
                'apartmentName' => 'THE SAKURA',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => 'Ngắm trọn vẹn quần thể nội khu chuẩn phong cách Nhật Bản.',
                'informationDetail' => 'Căn hộ 3PN - 2WC, diện tích 87m2.View siêu đẹp với sân tập thể thao ,bể bơi 4 mùa , thung lũng hoa Hokkaido,vườn thiền…',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/phan-khu-the-sakura-vinhomes-smart-city.1626765883454.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 19,
                'apartmentName' => 'THE SAKURA',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => 'Ngắm trọn vẹn quần thể nội khu chuẩn phong cách Nhật Bản.',
                'informationDetail' => 'Căn hộ 3PN - 2WC, diện tích 87m2.View siêu đẹp với sân tập thể thao ,bể bơi 4 mùa , thung lũng hoa Hokkaido,vườn thiền…',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/phan-khu-the-sakura-vinhomes-smart-city.1626765883454.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 20,
                'apartmentName' => 'THE SAKURA',
                'address' => 'Hà Nội',
                'price' => 800,
                'information' => 'Ngắm trọn vẹn quần thể nội khu chuẩn phong cách Nhật Bản.',
                'informationDetail' => 'Căn hộ 3PN - 2WC, diện tích 87m2.View siêu đẹp với sân tập thể thao ,bể bơi 4 mùa , thung lũng hoa Hokkaido,vườn thiền…',
                'thumbnail' => 'https://cenhomesvn.s3.ap-southeast-1.amazonaws.com/articles/phan-khu-the-sakura-vinhomes-smart-city.1626765883454.jpg',
                'status' => '1',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
