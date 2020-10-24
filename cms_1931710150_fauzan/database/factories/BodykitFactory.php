<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bodykit;
use Faker\Generator as Faker;

$factory->define(Bodykit::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->realText(2000),
        'imageurl' => $faker->imageUrl(300, 300,'cats', true),
    ];
});
