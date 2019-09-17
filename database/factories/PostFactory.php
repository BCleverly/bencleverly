<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'excerpt' => $faker->sentence,
        'body' => $faker->paragraphs(rand(3,10), true),
        'user_id' => 1
    ];
});
