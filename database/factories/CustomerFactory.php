<?php

use App\Models\Customer;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'customer_name' => $faker->name,
        'customer_address' => $faker->address,
        'customer_phone' => $faker->e164PhoneNumber,
    ];
});
