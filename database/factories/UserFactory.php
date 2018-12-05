<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->sentence,
        'image' => 'KrnBRbTUzF.jpeg',
        'dateOfPost' => '08/09/17',
        'views' => $faker->numberBetween(0, 5000),
        'category_id' => 1,
        'user_id' => 1,
        'status' => 1,
        'is_featured' => 0,
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
    ];
});

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
    ];
});
