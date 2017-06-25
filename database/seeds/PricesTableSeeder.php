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
        $price->price_bike = '5000đ / 1h';
        $price->price_bike_detail = '100000đ / ngày';
        $price->price_mbike = '0đ / 1h';
        $price->price_mbike_detail = '150000đ / 1 ngày';
        $price->save();
    }
}
