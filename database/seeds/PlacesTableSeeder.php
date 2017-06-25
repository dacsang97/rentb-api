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
            'lon' => 21.024626,
            'lat' => 105.824604
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '251 Hào Nam',
            'address' => 'Chợ Dừa, Đống Đa, Hà Nội',
            'lon' => 21.026709,
            'lat' => 105.830269
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Quảng Bá',
            'address' => 'Quảng An, Tây Hồ, Hà Nội',
            'lon' => 21.067787,
            'lat' => 105.822472
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '177 Nhật Chiêu',
            'address' => 'Nhật Tân, Tây Hồ, Hà Nội',
            'lon' => 21.073384,
            'lat' => 105.816488,
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Sen Hồ Tây',
            'address' => 'Nhật Tân, Tây Hồ, Hà Nội',
            'lon' => 21.075024,
            'lat' => 105.819106,
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '586 Lạc Long Quân',
            'address' => 'Nhật Tân, Tây Hồ, Hà Nội',
            'lon' => 21.074361,
            'lat' => 105.813011
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'Võ Chí Công',
            'address' => 'Khu đô thị Ciputra, Phú Thượng',
            'lon' => 21.076629,
            'lat' => 105.811403
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '386-390 Âu Cơ',
            'address' => 'Nhật Tân, Tây Hồ, Hà Nội',
            'lon' => 21.075269,
            'lat' => 105.822920
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'Inter Taekwondo',
            'address' => 'Ngõ 9 - Đặng Thai Mai, Quảng An',
            'lon' => 21.062603,
            'lat' => 105.826482
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Ngõ Cổng Hầu',
            'address' => 'Bưởi, Tây Hồ, Hà Nội',
            'lon' => 21.051462,
            'lat' => 105.809312
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '111/71 Tân Ấp',
            'address' => 'Phúc Xá, Ba Đình, Hà Nội',
            'lon' => 21.048767,
            'lat' => 105.844336
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '72 Phan Đình Phùng',
            'address' => 'Quán Thánh, Ba Đình, Hà Nội',
            'lon' => 21.041545,
            'lat' => 105.838583
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'đình Đại Yên',
            'address' => 'Ngọc Hà, Ba Đình, Hà Nội',
            'lon' => 21.038260,
            'lat' => 105.821125
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '35 Đốc Ngữ',
            'address' => 'Ngọc Hà, Ba Đình, Hà Nội',
            'lon' => 21.042143,
            'lat' => 105.814902
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => '13 Ngõ Thịnh Hào II',
            'address' => 'Hàng Bột, Đống Đa, Hà Nội',
            'lon' => 21.023329,
            'lat' => 105.831089
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Vườn hoa Trần Quang Diệu',
            'address' => 'Quang Trung, Đống Đa, Hà Nội',
            'lon' => 21.014060,
            'lat' => 105.824174
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => '39 Quang Trung',
            'address' => 'Trần Hưng Đạo, Hoàn Kiếm',
            'lon' => 21.051462,
            'lat' => 105.809312
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Sông Lấp',
            'address' => 'Quỳnh Lôi, Hai Bà Trưng, Hà Nội',
            'lon' => 20.999162,
            'lat' => 105.853520
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Ngõ 153 Trường Chinh',
            'address' => 'Phương Liệt, Thanh Xuân, Hà Nội',
            'lon' => 20.996182,
            'lat' => 105.836675,
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => '102/102 Le Trong Tan',
            'address' => 'Khương Mai, Thanh Xuân, Hà Nội',
            'lon' => 20.993368,
            'lat' => 105.828164
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Trường Quốc tế Anh Việt Hà Nội',
            'address' => '72A Nguyễn Trãi, Khu đô thị Royal City',
            'lon' => 21.001148,
            'lat' => 105.815131
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Ngõ 345 Khương Trung',
            'address' => 'Khương Đình, Thanh Xuân',
            'lon' => 20.994278,
            'lat' => 105.820273
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Ngõ 364 Giải Phóng',
            'address' => 'Thịnh Liệt, Hoàng Mai, Hà Nội',
            'lon' => 20.982028,
            'lat' => 105.840132
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'Ngõ 22 Nguyễn Đức Cảnh',
            'address' => 'Tân Mai, Hoàng Mai, Hà Nội',
            'lon' => 20.986498,
            'lat' => 105.828164
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Ngõ 107 Lĩnh Nam',
            'address' => 'Vĩnh Hưng, Hai Bà Trưng, Hà Nội',
            'lon' => 20.987325,
            'lat' => 105.872227
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Trần Phú',
            'address' => 'Hoàng Mai, Hà Nội, Việt Nam',
            'lon' => 20.978481,
            'lat' => 105.871412
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'AH1',
            'address' => 'Hoàng Liệt, Hoàng Mai, Hà Nội',
            'lon' => 20.965000,
            'lat' => 105.858588
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Đa Sỹ',
            'address' => 'Kiến Hưng, Hà Đông, Hà Nội',
            'lon' => 20.963539,
            'lat' => 105.786545
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Văn Phú',
            'address' => 'Khu đô thị Văn Phú, Phú La',
            'lon' => 20.959910,
            'lat' => 105.768224
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'Phú La',
            'address' => 'Hà Đông, Hà Nội',
            'lon' => 20.954563,
            'lat' => 105.758870
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '117 Ngõ 85',
            'address' => 'Hạ Đình, Thanh Xuân, Hà Nội',
            'lon' => 20.992470,
            'lat' => 105.809133
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Ngõ 460 Khương Đình',
            'address' => 'Hạ Đình, Thanh Xuân, Hà Nội',
            'lon' => 20.986049,
            'lat' => 105.811254
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'Triều Khúc',
            'address' => 'Tân Triều, Thanh Trì, Hà Nội',
            'lon' => 20.981088,
            'lat' => 105.797539
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '32 Đường Mỹ Đình',
            'address' => 'Mỹ Đình 2, Từ Liêm, Hà Nội',
            'lon' => 21.026284,
            'lat' => 105.772353
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => '4 tổ 41 Hồ Tùng Mậu',
            'address' => 'Mai Dịch, Cầu Giấy, Hà Nội',
            'lon' => 21.038056,
            'lat' => 105.778223
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'Phú Diễn',
            'address' => 'Từ Liêm, Hà Nội, Việt Nam',
            'lon' => 21.049530,
            'lat' => 105.764104
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Phan Bá Vành',
            'address' => 'Cổ Nhuế 1, Từ Liêm, Hà Nội',
            'lon' => 21.055452,
            'lat' => 105.774654
        ]);
        factory(App\Place::class)->create([
            'type' => 0,
            'name' => 'Ngõ 115 Trần Cung',
            'address' => 'Cổ Nhuế 1, Từ Liêm, Hà Nội',
            'lon' => 21.049456,
            'lat' => 105.785520
        ]);
        factory(App\Place::class)->create([
            'type' => 1,
            'name' => 'Lâm Du',
            'address' => 'Bồ Đề, Long Biên, Hà Nội',
            'lon' => 21.036916,
            'lat' => 105.877485
        ]);

        factory(App\Place::class)->create([
            'type' => 2,
            'name' => 'Cây xăng La Thành',
            'address' => 'Thành Công, Ba Đình, Hà Nội, Việt Nam',
            'lon' => 21.0237466,
            'lat' => 105.8131874,
            'price_id' => null,
        ]);
        factory(App\Place::class)->create([
            'type' => 2,
            'name' => 'Trạm Xăng Nguyễn Công Hoan',
            'address' => 'Ngõ 84, Giảng Võ, Ba Đình, Hà Nội, Việt Nam',
            'lon' => 21.0253089,
            'lat' => 105.8147001,
            'price_id' => null,
        ]);
        factory(App\Place::class)->create([
            'type' => 2,
            'name' => 'Nguyễn Chí Thanh/La Thành',
            'address' => 'Nguyễn Chí Thanh, Láng Hạ, Đống Đa, Hà Nội, Việt Nam',
            'lon' => 21.0243083,
            'lat' => 105.8086098,
            'price_id' => null,
        ]);
        factory(App\Place::class)->create([
            'type' => 2,
            'name' => 'Đối diện 4 Triệu Quốc Đạt',
            'address' => '4 Triệu Quốc Đạt Trần Hưng Đạo, Hoàn Kiếm Hà Nội, Việt Nam',
            'lon' => 21.0263063,
            'lat' => 105.8470848,
            'price_id' => null,
        ]);

        factory(App\Place::class)->create([
            'type' => 2,
            'name' => 'Cây Xăng Quân Đội',
            'address' => '107 Phan Văn Trường, Dịch Vọng Hậu, Cầu Giấy, Hà Nội, Việt Nam',
            'lon' => 21.0239812,
            'lat' => 105.7800935,
            'price_id' => null,
        ]);

        factory(App\Place::class)->create([
            'type' => 2,
            'name' => 'Cửa hàng xăng dầu số 3',
            'address' => '1174 Đường Láng, Láng Thượng, Đống Đa, Hà Nội, Việt Nam',
            'lon' => 21.029429,
            'lat' => 105.7903932,
            'price_id' => null,
        ]);

        factory(App\Place::class)->create([
            'type' => 2,
            'name' => 'Cây xăng Nam Đồng',
            'address' => 'Ngõ 141 Hồ Đắc Di, Quang Trung, Đống Đa, Hà Nội, Việt Nam',
            'lon' => 21.029429,
            'lat' => 105.7903932,
            'price_id' => null,
        ]);

        factory(App\Place::class)->create([
            'type' => 2,
            'name' => 'Cây Xăng Trần Hưng Đạo',
            'address' => '6 Trần Hưng Đạo, Phan Chu Trinh, Hoàn Kiếm, Hà Nội, Việt Nam',
            'lon' => 21.0295893,
            'lat' => 105.8037828,
            'price_id' => null,
        ]);

        factory(App\Place::class)->create([
            'type' => 2,
            'name' => 'Cây Xăng 199 Minh Khai',
            'address' => '199 Minh Khai, Hai Bà Trưng, Hà Nội, Việt Nam',
            'lon' => 20.995897,
            'lat' => 105.858758,
            'price_id' => null,
        ]);

        factory(App\Place::class)->create([
            'type' => 2,
            'name' => 'Cây Xăng Láng Hạ',
            'address' => 'Thành Công, Ba Đình, Hà Nội, Việt Nam',
            'lon' => 21.0232659,
            'lat' => 105.8176398,
            'price_id' => null,
        ]);

        factory(App\Place::class)->create([
            'type' => 2,
            'name' => 'Trạm Xăng Dầu Thái Thịnh',
            'address' => '194 Thái Thịnh, Láng Hạ, Đống Đa, Hà Nội, Việt Nam',
            'lon' => 21.012019,
            'lat' => 105.8134234,
            'price_id' => null,
        ]);
//        factory(App\Place::class, 10)->create()->each(function($u) {
//            $u->price()->save(factory(App\Price::class)->make());
//        });
    }
}
