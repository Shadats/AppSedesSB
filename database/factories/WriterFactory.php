<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Writer;
use Faker\Generator as Faker;

$factory->define(Writer::class, function (Faker $faker) {
    return [
        //
        'authors_name' => $faker->name,
        'real_name' => $faker->name,
        
    ];
});
