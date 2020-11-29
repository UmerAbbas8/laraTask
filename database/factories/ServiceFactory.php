<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;
use App\Vendor;

$factory->define(Service::class, function (Faker $faker) {

    $vendor = Vendor::inRandomOrder()->get()->first();

    return [
        'vendor_id' => $vendor->id,
        'name' => $faker->sentence,
        'detail' => json_encode([$faker->word => $faker->words, $faker->word => $faker->sentence]),
        'type' => $faker->word,
        'category' => $faker->word,
        'sub_category' => $faker->word,
        'price' => $faker->randomNumber(2),
        // 'discount_type' => '',
        // 'discount' => '',
        // 'tax_type' => '',
        // 'tax' => '',
        'status' => 'approved'
    ];
});
