<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence,
        'body'=> $faker->realText(3000),
        'description'=> $faker->sentence,
        'thumbnail'=> $faker->imageUrl(512,512),
    ];
});
