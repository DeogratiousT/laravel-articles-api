<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'article_id' => factory(App\Article::class),
        'author_id' => factory(App\People::class),
        'body' => $faker->paragraph
    ];
});
