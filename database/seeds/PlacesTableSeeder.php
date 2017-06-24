<?php

use Illuminate\Database\Seeder;
use App\Place;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '92 Vũ Thạnh',
            'address' => 'Chợ Dừa, Đống Đa, Hà Nội',
            'lat' => 21.024626,
            'lon' => 105.824604
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '251 Hào Nam',
            'address' => 'Chợ Dừa, Đống Đa, Hà Nội',
            'lat' => 21.026709,
            'lon' => 105.830269
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Quảng Bá',
            'address' => 'Quảng An, Tây Hồ, Hà Nội',
            'lat' => 21.067787,
            'lon' => 105.822472
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '177 Nhật Chiêu',
            'address' => 'Nhật Tân, Tây Hồ, Hà Nội',
            'lat' => 21.073384,
            'lon' => 105.816488,
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Sen Hồ Tây',
            'address' => 'Nhật Tân, Tây Hồ, Hà Nội',
            'lat' => 21.075024,
            'lon' => 105.819106,
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '586 Lạc Long Quân',
            'address' => 'Nhật Tân, Tây Hồ, Hà Nội',
            'lat' => 21.074361,
            'lon' => 105.813011
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'Võ Chí Công',
            'address' => 'Khu đô thị Ciputra, Phú Thượng',
            'lat' => 21.076629,
            'lon' => 105.811403
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '386-390 Âu Cơ',
            'address' => 'Nhật Tân, Tây Hồ, Hà Nội',
            'lat' => 21.075269,
            'lon' => 105.822920
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'Inter Taekwondo',
            'address' => 'Ngõ 9 - Đặng Thai Mai, Quảng An',
            'lat' => 21.062603,
            'lon' => 105.826482
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Ngõ Cổng Hầu',
            'address' => 'Bưởi, Tây Hồ, Hà Nội',
            'lat' => 21.051462,
            'lon' => 105.809312
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '111/71 Tân Ấp',
            'address' => 'Phúc Xá, Ba Đình, Hà Nội',
            'lat' => 21.048767,
            'lon' => 105.844336
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '72 Phan Đình Phùng',
            'address' => 'Quán Thánh, Ba Đình, Hà Nội',
            'lat' => 21.041545,
            'lon' => 105.838583
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'đình Đại Yên',
            'address' => 'Ngọc Hà, Ba Đình, Hà Nội',
            'lat' => 21.038260,
            'lon' => 105.821125
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '35 Đốc Ngữ',
            'address' => 'Ngọc Hà, Ba Đình, Hà Nội',
            'lat' => 21.042143,
            'lon' => 105.814902
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => '13 Ngõ Thịnh Hào II',
            'address' => 'Hàng Bột, Đống Đa, Hà Nội',
            'lat' => 21.023329,
            'lon' => 105.831089
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Vườn hoa Trần Quang Diệu',
            'address' => 'Quang Trung, Đống Đa, Hà Nội',
            'lat' => 21.014060,
            'lon' => 105.824174
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => '39 Quang Trung',
            'address' => 'Trần Hưng Đạo, Hoàn Kiếm',
            'lat' => 21.051462,
            'lon' => 105.809312
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Sông Lấp',
            'address' => 'Quỳnh Lôi, Hai Bà Trưng, Hà Nội',
            'lat' => 20.999162,
            'lon' => 105.853520
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Ngõ 153 Trường Chinh',
            'address' => 'Phương Liệt, Thanh Xuân, Hà Nội',
            'lat' => 20.996182,
            'lon' => 105.836675,
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => '102/102 Le Trong Tan',
            'address' => 'Khương Mai, Thanh Xuân, Hà Nội',
            'lat' => 20.993368,
            'lon' => 105.828164
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Trường Quốc tế Anh Việt Hà Nội',
            'address' => '72A Nguyễn Trãi, Khu đô thị Royal City',
            'lat' => 21.001148,
            'lon' => 105.815131
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Ngõ 345 Khương Trung',
            'address' => 'Khương Đình, Thanh Xuân',
            'lat' => 20.994278,
            'lon' => 105.820273
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Ngõ 364 Giải Phóng',
            'address' => 'Thịnh Liệt, Hoàng Mai, Hà Nội',
            'lat' => 20.982028,
            'lon' => 105.840132
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'Ngõ 22 Nguyễn Đức Cảnh',
            'address' => 'Tân Mai, Hoàng Mai, Hà Nội',
            'lat' => 20.986498,
            'lon' => 105.828164
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Ngõ 107 Lĩnh Nam',
            'address' => 'Vĩnh Hưng, Hai Bà Trưng, Hà Nội',
            'lat' => 20.987325,
            'lon' => 105.872227
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Trần Phú',
            'address' => 'Hoàng Mai, Hà Nội, Việt Nam',
            'lat' => 20.978481,
            'lon' => 105.871412
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'AH1',
            'address' => 'Hoàng Liệt, Hoàng Mai, Hà Nội',
            'lat' => 20.965000,
            'lon' => 105.858588
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Đa Sỹ',
            'address' => 'Kiến Hưng, Hà Đông, Hà Nội',
            'lat' => 20.963539,
            'lon' => 105.786545
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Văn Phú',
            'address' => 'Khu đô thị Văn Phú, Phú La',
            'lat' => 20.959910,
            'lon' => 105.768224
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'Phú La',
            'address' => 'Hà Đông, Hà Nội',
            'lat' => 20.954563,
            'lon' => 105.758870
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '117 Ngõ 85',
            'address' => 'Hạ Đình, Thanh Xuân, Hà Nội',
            'lat' => 20.992470,
            'lon' => 105.809133
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Ngõ 460 Khương Đình',
            'address' => 'Hạ Đình, Thanh Xuân, Hà Nội',
            'lat' => 20.986049,
            'lon' => 105.811254
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'Triều Khúc',
            'address' => 'Tân Triều, Thanh Trì, Hà Nội',
            'lat' => 20.981088,
            'lon' => 105.797539
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '32 Đường Mỹ Đình',
            'address' => 'Mỹ Đình 2, Từ Liêm, Hà Nội',
            'lat' => 21.026284,
            'lon' => 105.772353
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '4 tổ 41 Hồ Tùng Mậu',
            'address' => 'Mai Dịch, Cầu Giấy, Hà Nội',
            'lat' => 21.038056,
            'lon' => 105.778223
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'Phú Diễn',
            'address' => 'Từ Liêm, Hà Nội, Việt Nam',
            'lat' => 21.049530,
            'lon' => 105.764104
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Phan Bá Vành',
            'address' => 'Cổ Nhuế 1, Từ Liêm, Hà Nội',
            'lat' => 21.055452,
            'lon' => 105.774654
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Ngõ 115 Trần Cung',
            'address' => 'Cổ Nhuế 1, Từ Liêm, Hà Nội',
            'lat' => 21.049456,
            'lon' => 105.785520
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'Lâm Du',
            'address' => 'Bồ Đề, Long Biên, Hà Nội',
            'lat' => 21.036916,
            'lon' => 105.877485
        ]);
//        factory(App\Place::class, 10)->create()->each(function($u) {
//            $u->price()->save(factory(App\Price::class)->make());
//        });
    }
}
