<?php

use Faker\Generator as Faker;

$factory->define(App\equipos::class, function (Faker $faker) {
    return [
        'codigo' => $faker->codigo,
        'model' => $faker->model,
        'serie' => $faker->serie,
        'descripcion' => $faker->descripcion,
        'estado' => $faker->estado,
        'costo' => $faker->costo,

        
    ];
});
