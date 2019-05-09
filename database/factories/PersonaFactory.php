<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Persona;

use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
    return [
       'name' => $faker->firstname,
        'lastname' => $faker->lastname,
        
        'dni' => $faker->randomNumber(8),
       	'tel' => ('15')+$faker->randomNumber(6),
        'fccNac'=> $faker->date($format = 'Y-m-d', $max = 'now'),

    ];
});
