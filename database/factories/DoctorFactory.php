<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\doctor::class, function (Faker $faker) {
    return [
        'firstname'=>$faker->firstname,
        'lastname'=>$faker->lastname,
        'surname'=>$faker->lastname,
        'gender'=>'Male',
        'phone'=>$faker->phoneNumber,
        'email'=>$faker->unique()->safeEmail,
        'county'=>'Nairobi',
    ];
});
