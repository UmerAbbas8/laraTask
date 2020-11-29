<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vendor;
use Faker\Generator as Faker;

$factory->define(Vendor::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'business_name' => $faker->company,
        'email' => $faker->email,
        'password' => bcrypt('secret'),
        'status' => 'approved',
    ];
});
