<?php

/** @var Factory $factory */

use App\Question;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'title' => $faker->sentence,
        'content' => $faker->text,
    ];
});
