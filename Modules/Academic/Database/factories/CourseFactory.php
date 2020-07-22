<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'course_name' => $faker->word,
        'course_category' => $faker->numberBetween(1,10),
        'course_code' => $faker->postcode,

    ];
});
