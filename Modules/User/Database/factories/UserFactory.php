<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Modules\User\Entities\User as User;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'phone'=> $faker->unique()->randomNumber(null, 15),
        'email'=> $faker->unique()->email,
        'password'=> bcrypt('mensore'),
        'remember_token' => Str::random(10)
    ];
});
