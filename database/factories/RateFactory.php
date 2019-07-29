<?php

use App\Models\Rate;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Rate::class, function (Faker $faker) {
    $user_id = DB::table('users')->pluck('id');
    return [
        'point_rate' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 9),
        'user_id' => $faker->randomElement($user_id),
        'number_user_rate' => $faker->numberBetween($min = 10, $max = 100),
    ];
});
