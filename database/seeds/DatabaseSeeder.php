<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ImagesTableSeeder::class);
        $this->call(PricesTableSeeder::class);
        $this->call(PlacesTableSeeder::class);
    }
}
