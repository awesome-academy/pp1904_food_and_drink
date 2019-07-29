<?php

use App\Models\Orderdetail;
use App\Models\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Orderdetail::class, function (Faker $faker) {
    $product_id = DB::table('products')->pluck('id');
    $price_id = $faker->randomElement($product_id);
    $price_each = Product::where('id', $price_id)->value('price');
    $order_id = DB::table('orders')->pluck('id'); 
    return [
        'product_id' => $price_id,
        'order_id' => $faker->randomElement($order_id),
        'price_each' => $price_each,
        'quantity_order' => $faker->randomDigitNotNull(),
    ];
});
