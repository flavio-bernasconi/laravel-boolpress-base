<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'text' => $faker->text,
        'author' => $faker->name,
        'img' => $faker->imageUrl($width = 640, $height = 480)
    ];
});
