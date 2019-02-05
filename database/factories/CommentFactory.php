<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'body'=>$faker->sentence,
    ];
});
