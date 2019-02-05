<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title'=> $faker->realText(300),
        'body'=> $faker->realText(3000),
        'description'=> $faker->realText(300),
        'thumbnail'=> $faker->imageUrl(512,512),
    ];
});
