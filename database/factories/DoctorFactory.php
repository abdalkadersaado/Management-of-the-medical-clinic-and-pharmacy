<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Model\Doctor::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,  
    ];
});
