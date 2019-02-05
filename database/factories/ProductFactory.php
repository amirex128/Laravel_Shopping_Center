<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'brand_id'=>random_int(1,5),
        'gallery_id'=>random_int(1,5),
        'property_id'=>random_int(1,5),
        'warranty_id'=>random_int(1,5),
        'title'=>$faker->sentence,
        'description'=>$faker->sentence,
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
