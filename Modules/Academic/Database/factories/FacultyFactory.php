<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Modules\Academic\Entities\Faculty;

$factory->define(Faculty::class, function (Faker $faker) {
    $faculty_status = 0;
    return [
        'faculty_code' => $faker->numberBetween(1000, 10000000),
        'faculty_name' => $faker->word,

        'color_code' => $faker->colorName,
        'faculty_status' => $faculty_status,
        //'created_by' => 1,
        //'updated_by' => $faker->name,
        //'deleted_by' => $faker->name
    ];
});
