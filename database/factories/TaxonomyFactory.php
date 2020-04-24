<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Taxonomy;
use Faker\Generator as Faker;

$factory->define(Taxonomy::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
