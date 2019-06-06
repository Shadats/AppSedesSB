<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        //
        'publication date'=> $faker->date($format = 'Y-m-d', $max = 'now'),
        'writer_id'=> $faker-> randomnumber(1),
          'title' => $faker-> word (5),
           'about' => $faker-> word (5),
    ];
});
