<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Me;
use Faker\Generator as Faker;

$factory->define(Me::class, function (Faker $faker) {
    return [
        'imageMe' => $faker->imageUrl(750, 300,'cats', true),
        'nameMe' => $faker->sentence(),
        'descriptionMe' => $faker->realText(2000),
    ];
});
