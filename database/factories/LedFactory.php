<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Led;
use App\Family;
use Faker\Generator as Faker;


$factory->define(Led::class, function (Faker $faker) {
    $families = Family::all();

    // ACA ESTA TRAYENDO TODAS LAS FAMILIAS , TRAEME DE LA TABLA LAS FAMILIAS EXISTENTES //
    return [
        //
        'name'=> $faker->unique()->company,
        'power'=> $faker->randomFloat(2, 0,90),
        'size'=>$faker->text(20),
        'color_t'=>$faker->randomNumber(3,false),
        'min_flux'=>$faker->randomNumber(3,false),
        'max_flux'=>$faker->randomNumber(3,false),
        'image'=> "",
        'price'=> $faker->randomFloat(2, 2000, 5000),
        'family_id'=> $families->random()->id,
        'description'=>$faker->text(255),

        // ACA ME ESTA GENERANDO UN FOREIGN KEY MENTIROSO, SI HUBIERA GENERADO LA RELACION NO PODRIA HACERLO //
    ];
});
