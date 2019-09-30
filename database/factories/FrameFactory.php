<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Frame;
use App\Family;
use Faker\Generator as Faker;

$factory->define(Frame::class, function (Faker $faker) {
    $families = Family::all();

    // ACA ESTA TRAYENDO TODAS LAS FAMILIAS , TRAEME DE LA TABLA LAS FAMILIAS EXISTENTES //
    return [
        //
        'name'=> $faker->unique()->company,
        'image'=> "",
        'description'=>$faker->text(255),
        'price'=> $faker->randomFloat(2, 2000, 5000),
        'image2'=> "images/fedromarcoc.jpg",
        'family_id'=> $families->random()->id,


        // ACA ME ESTA GENERANDO UN FOREIGN KEY MENTIROSO, SI HUBIERA GENERADO LA RELACION NO PODRIA HACERLO //


    ];
});
