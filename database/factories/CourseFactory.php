<?php

$factory->define(App\Course::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "description" => $faker->name,
        "start_date" => $faker->date("Y-m-d", $max = 'now'),
        "published" => 0,
    ];
});
