<?php

/** @var Factory $factory */

use App\Answer;
use App\Question;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'question_id' => function () {
            return factory(Question::class)->create()->id;
        },
        'content' => $faker->text,
    ];
});
