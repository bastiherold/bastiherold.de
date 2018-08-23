<?php

use App\Models\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'senderName' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'subject' => $faker->paragraph,
        'body' => $faker->paragraph
    ];
});
