<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comic;
use Faker\Generator as Faker;

$factory->define(Comic::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'author' => $faker->name(),
        'release_date' => $faker->dateTime(),
        'pages' => $faker->numberBetween(10, 255)
    ];
});
