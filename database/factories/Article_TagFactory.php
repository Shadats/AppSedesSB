<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Tag;
use App\Article;
use App\Article_Tag;
use Faker\Generator as Faker;

$factory->define(Article_tag::class, function (Faker $faker) {
    return [
        //
        'article_id'=> $faker-> randomnumber(1),
        'tag_id'=> $faker-> randomnumber(1),
    ];
});
