<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Modules\User\Entities\User as User;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'phone'=> $faker->unique()->randomNumber($nbDigits = 8, $strict = true),
        'email'=> $faker->unique()->safeEmail,
        'password'=> bcrypt('mensore'),
        'api_token' => Str::random(60),
        'remember_token' => Str::random(10)
    ];
});
