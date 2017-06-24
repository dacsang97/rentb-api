<?php

use Illuminate\Database\Seeder;
use App\Price;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price = new Price();
        $price->price_bike = 5000;
        $price->price_bike_detail = '5000đ / 1h';
        $price->price_mbike = 100000;
        $price->price_mbike_detail = '100000đ / 1 ngày';
        $price->save();
    }
}
