<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Modules\Academic\Entities\Slqf;

$factory->define(Slqf::class, function (Faker $faker) {
    return [
        'slqf_number' => $faker->postcode,
        'slqf' => $faker->sentence
    ];
});
