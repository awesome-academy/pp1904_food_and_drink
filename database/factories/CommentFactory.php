<?php

use App\Models\Comment;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $user_id = DB::table('users')->pluck('id');
    $product_id = DB::table('products')->pluck('id');
    return [
        'user_id' => $faker->randomElement($user_id),
        'product_id' => $faker->randomElement($product_id),
        'content' => $faker->realText($maxNbChars = 50, $indexSize = 2),
        'status' => $faker->randomElement([1, 0]),
    ];
});
