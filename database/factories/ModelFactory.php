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
// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     static $password;
//
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => $password ?: $password = bcrypt('secret'),
//         'remember_token' => str_random(10),
//     ];
// });

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => 'Luis Ramirez',
        'email' => 'me.luisramirez@gmail.com',
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Client::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'created_at' => $faker->dateTimeThisDecade,
    ];
});


$factory->define(App\Transport::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Camion'.' '.random_int(1, 5),
        'brand' => 'Volvo',
        'model' => 'VNR'. ' '. random_int(1, 500),
        'created_at' => $faker->dateTimeThisDecade,
    ];
});

$factory->define(App\Driver::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'lastname' => $faker->lastName,
        'licence' => $faker->image($dir = '/tmp', $width = 640, $height = 480),
        'medical_certificate' => $faker->image($dir = '/tmp', $width = 640, $height = 480),
        'observation' => $faker->realText(random_int(20, 200)),
    ];
});
