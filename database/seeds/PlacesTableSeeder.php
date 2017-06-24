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
        for ($i = 0; $i < 100; $i++) {
            $image = factory(App\Image::class)->create();
            $price = factory(App\Price::class)->create();
            $place = factory(App\Place::class)->create();
            $place->update([
                'image_id' => $image->id,
            ]);
            if ($place->type != 2) {
                $place->update([
                    'price_id' => $price->id,
                ]);
            }
        }
//        factory(App\Place::class, 10)->create()->each(function($u) {
//            $u->price()->save(factory(App\Price::class)->make());
//        });
    }
}
