<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ParteCuerpo;
use Faker\Generator as Faker;

$factory->define(ParteCuerpo::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->word,
        'descripcion'=>$faker->sentence,
        'imagen'=>$faker->imageUrl(640,480,'cats')
    ];
});
