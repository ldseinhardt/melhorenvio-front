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

$factory->define(App\Package::class, function (Faker\Generator $faker) {
    return [
        'label' => str_limit($faker->sentence(2), 24, false),
        'width' => $faker->numberBetween(12, 30),
        'height' => $faker->numberBetween(4, 30),
        'length' => $faker->numberBetween(17, 30),
        'weight' => $faker->numberBetween(1, 30),
    ];
});
