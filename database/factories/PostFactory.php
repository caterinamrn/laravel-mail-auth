<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [

      'title' => $faker -> word(),
      'content' => $faker -> text($maxNbChars = 200),
      'like' => $faker -> numberBetween($min = 0, $max = 1000),
      'dislike'  => $faker -> numberBetween($min = 0, $max = 1000)

    ];
});
