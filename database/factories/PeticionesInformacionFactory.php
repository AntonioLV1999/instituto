<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PeticionesInformacion;
use Faker\Generator as Faker;

$factory->define(PeticionesInformacion::class, function (Faker $faker) {
    return [
        'tutorGrupo' => $faker->randomDigit ,
        'alumno' => $faker->randomDigit ,
        'observaciones' => $faker->text ,
    ];
});
