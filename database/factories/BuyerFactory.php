<?php

use Faker\Generator as Faker;
use App\Buyer;

$factory->define(Buyer::class, function (Faker $faker) {
    return [
        'buyerName' => $faker->name,
        'buyerEmail' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
    ];
});
