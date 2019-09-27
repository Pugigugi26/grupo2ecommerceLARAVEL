<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Family;
use Faker\Generator as Faker;

$factory->define(Family::class, function (Faker $faker) {
    return [

        'name'=> $faker->unique()->company,
        'category'=> $faker->word(),
        'description'=>$faker->text(255),
        'code'=> $faker-> word(),
        'image'=> "",
        //
    ];
});
