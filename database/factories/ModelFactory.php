<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/*
 * Factory Prices
 */
$factory->define(App\Price::class, function(Faker\Generator $faker) {
    return [
        'price_bike' => $faker->numberBetween(2000, 6000),
        'price_bike_detail' => '5000đ / 1h',
        'price_mbike' => $faker->numberBetween(50000, 100000),
        'price_mbike_detail' => '100000đ / 1 ngày'
    ];
});

/*
 * Factory Images
 */
$factory->define(App\Image::class, function(Faker\Generator $faker) {
   return [
       'original_name' => 'random.jpg',
       'file_name' => 'random.jpg',
       'slug_icon' => 'http://lorempixel.com/600/400/',
       'slug_original' => 'http://lorempixel.com/600/400/',
   ];
});

$factory->define(App\Place::class, function(Faker\Generator $faker) {
    return [
        'type' => $faker->numberBetween(0,2),
        'name' => $faker->name,
        'description' => $faker->sentence(10),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'lon' => $faker->longitude(21.023825, 21.026228),
        'lat' => $faker->latitude(105.829325, 105.829668),
        'image_id' => 1,
        'price_id' => 1,
    ];
});
