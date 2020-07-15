<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    return [
        'nik' => substr(str_shuffle("0123456789"), 0, 10), 
        'name' => $faker->firstName, 
        'birthdate' => $faker->dateTimeThisCentury('1998-12-12')->format('Y-m-d'), 
        'gender' => $faker->randomElement($array = array('Male', 'Female')), 
        'phone' => $faker->phoneNumber, 
        'email' => $faker->email, 
        'position_id' => $faker->randomElement($array = array(1, 2, 3)), 
        'user_id' => rand(1, 5), 
        'address' => $faker->address, 
    ];
});
