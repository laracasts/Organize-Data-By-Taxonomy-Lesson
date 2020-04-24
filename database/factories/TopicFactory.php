<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Topic;
use App\Taxonomy;
use Faker\Generator as Faker;

$factory->define(Topic::class, function (Faker $faker) {
    return [
        'taxonomy_id' => factory(Taxonomy::class),
        'name' => $faker->word,
        'description' => $faker->sentence
    ];
});
