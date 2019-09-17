<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Work;
use Faker\Generator as Faker;

$factory->define(Work::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->sentence,
        'body' => function() use ($faker){
            $html = '';
            foreach($faker->paragraphs(rand(3,10)) as $para) {
                $html .= '<p>' .$para. '</p>';
            }
            return $html;
        },
        'user_id' => 1
    ];
});
