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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'fname' => $faker->firstName,
        'city' => $faker->city,
        'country' => $faker->country,
        'home_phone' => $faker->phoneNumber,
        'office_phone' => $faker->phoneNumber,
        'mobile' => $faker->phoneNumber,
        'zipcode' => $faker->postcode,
        'address' => $faker->address,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Countries::class, function (Faker\Generator $faker) {
    return ['country' => $faker->country];
});

$factory->define(App\Departments::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(200)
    ];
});

$factory->define(App\Teams::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(200)
    ];
});

$factory->define(App\Labels::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'color' => $faker->hexColor
    ];
});