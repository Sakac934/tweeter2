<?php
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
          'comment' => $faker->realText,
    ];
});
