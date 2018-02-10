<?php

use Faker\Generator as Faker;

$factory->define(App\Message::class, function (Faker $faker) {
    return [
        'senderName' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'subject' => $faker->paragraph,
        'body' => $faker->paragraph
    ];
});
