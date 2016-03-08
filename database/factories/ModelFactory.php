<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(behabitat\Models\User::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->unique()->username,
        'email' => $faker->unique()->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'is_admin' => false
    ];
});
/*
$factory->define(behabitat\Perfil::class, function (Faker\Generator $faker) {
    return [
        'perfil' => 'cliente',
        'nombre' => $faker->firstName,
        'primer_apellido' = $faker->lastName,
        'segundo_apellido' = $faker->lastName,
        'nif' => $faker->unique()->randomNumber(9).randomLetter,
        'razon_social' => $faker->company,
        'cif' => null,
        'direccion' => $faker->streetAddress,
        'localidad' => $faker->city
        'provincia' => $faker->city,
        'codigo_postal' => $faker->postcode,
        'telefono' => $faker->phoneNumber,
        'telefono_movil' => $faker->phoneNumber,

    ];
});
*/