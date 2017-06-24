<?php

use Illuminate\Database\Seeder;
use App\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = new Image();
        $image->original_name = 'bike-thumbnail.jpg';
        $image->file_name = 'bike-thumbnail.jpg';
        $image->slug_icon = 'https://cdn.shopify.com/s/files/1/0108/1062/files/bike-thumbnail.jpg';
        $image->slug_original = 'https://cdn.shopify.com/s/files/1/0108/1062/files/bike-thumbnail.jpg';
        $image->save();


    }
}
