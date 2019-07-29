<?php

use App\Models\Order;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $customer_id = DB::table('customers')->pluck('id');
    $orderdetail_id = DB::table('orderdetails')->pluck('id');
    return [
        'customer_id' => $faker->randomElement($customer_id),
        'orderdetail_id' => $faker->randomElement($orderdetail_id),
        'required_date' => now(),
        'shipped_date' => $faker->dateTimeInInterval($startDate = 'now', $interval = '+ 5 days', $timezone = 'Asia/Ho_Chi_Minh'),
        'total_price' => $faker->randomFloat($nbMaxDecimals = 1, $min = 5, $max = 100),
    ];
});
