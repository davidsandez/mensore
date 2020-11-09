<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Modules\Invoice\Entities\Invoice as Invoice;
use Modules\User\Entities\User as User;

$factory->define(Invoice::class, function (Faker $faker) {
    return [
        'invoice_number'=> $faker->numberBetween($min = 89, $max = 9427) ,
        'date'=> function (){
            $dt = $this->faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now');
            return $dt->format("Y-m-d"); // 1994-09-24
            //$this->faker->dateTime($max = 'now', $timezone = null)
        },
        'total_price'=> $faker->numberBetween($min = 100, $max = 45000),
        'user_id'=>  User::all()->random()->id,
    ];
});
