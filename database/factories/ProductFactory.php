<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title'=>$faker->realText(300),
        'description'=>$faker->realText(300),
        'body'=>$faker->realText(2000),
        'price'=>random_int(10000,10000000),
        'offer'=>random_int(10000,500000),
        'thumbnail'=>$faker->imageUrl(512,512),
        'status'=>random_int(1,2),
        'special'=>random_int(1,2),
        'code'=>random_int(1000,9999),
        'stock'=>random_int(1,1000),
        'situation'=>random_int(1,5),

    ];
});
