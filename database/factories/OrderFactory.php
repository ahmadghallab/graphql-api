<?php

use Faker\Generator as Faker;
use App\Order;
use App\Product;
use App\Buyer;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'product' => factory(Product::class)->create()->id,
        'buyer' => factory(Buyer::class)->create()->id
    ];
});
