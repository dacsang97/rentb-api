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
