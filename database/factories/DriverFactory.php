<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Driver;
use App\Family;
use Faker\Generator as Faker;


$factory->define(Driver::class, function (Faker $faker) {
    $families = Family::all();

    // ACA ESTA TRAYENDO TODAS LAS FAMILIAS , TRAEME DE LA TABLA LAS FAMILIAS EXISTENTES //
    return [
        //
        'dim'=>$faker->userName,
        'model'=> $faker->unique()->company,
        'brand'=> $faker->unique()->userName,
        'current'=>$faker->randomNumber(3,false), // 79907610
        'voltage'=>$faker->randomNumber(3,false),
        'price'=> $faker->randomFloat(2, 2000, 5000),
        'description'=>$faker->text(255),
        'image'=> "",
        'family_id'=> $families->random()->id,
        // ACA ME ESTA GENERANDO UN FOREIGN KEY MENTIROSO, SI HUBIERA GENERADO LA RELACION NO PODRIA HACERLO //


    ];
});
