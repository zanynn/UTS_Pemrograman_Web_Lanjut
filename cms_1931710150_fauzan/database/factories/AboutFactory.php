<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\About;
use Faker\Generator as Faker;

$factory->define(About::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'description' => $faker->realText(2000),
        'titlegraph' => $faker->sentence(),
        'text' => $faker->realText(200),
        'year' => $faker->randomNumber(4),
        'valuebar' => $faker->randomNumber(2),
    ];
});
