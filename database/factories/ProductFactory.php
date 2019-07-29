<?php

use App\Models\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $category_id = DB::table('categories')->pluck('id');
    return [
        'product_name' => $faker->name,
        'slug' => $faker->sha1(),
        'image' => $faker->image($dir = '/tmp', $width = 640, $height = 480),
        'category_id' => $faker->randomElement($category_id),
        'product_description' => $faker->realText($maxNbChars = 50, $indexSize = 2),
        'price' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 3),
        'rate_average' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 9),
        'status' => $faker->randomElement($array = [1, 0]),
    ];
});
