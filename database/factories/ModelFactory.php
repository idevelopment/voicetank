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
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Faq::class, function (Faker\Generator $faker) {
    return [
        'question' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'answer'   => $faker->text($maxNbChars = 200) ,
    ];
});

$factory->define(App\Labels::class, function (Faker\Generator $faker) {
    return [
        'name'  => 'Feature',
        'color' => '#000000',
    ];
});

$factory->define(App\Categories::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'Parent' => $faker->numberBetween(0, 100),
        'ParentGroup' => $faker->numberBetween(0, 100)
    ];
});
