<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Optic;
use App\Family;
use Faker\Generator as Faker;


$factory->define(Optic::class, function (Faker $faker) {
    $families = Family::all();

    // ACA ESTA TRAYENDO TODAS LAS FAMILIAS , TRAEME DE LA TABLA LAS FAMILIAS EXISTENTES //
    return [

        'name'=> $faker->unique()->company,
        'angle'=>$faker->randomNumber(3,false),
        'image'=> "images/empotrablemed.jpg",
        'price'=> $faker->randomFloat(2, 2000, 5000),
        'description'=>$faker->text(255),
        'family_id'=> $families->random()->id,


        // ACA ME ESTA GENERANDO UN FOREIGN KEY MENTIROSO, SI HUBIERA GENERADO LA RELACION NO PODRIA HACERLO //
    ];
});
