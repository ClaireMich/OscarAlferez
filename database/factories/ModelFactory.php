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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Escuela\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});



$factory->define(Escuela\Models\Student::class, function($faker){
		return[
			'nombre'						=> $faker->firstName,
			'apellidoPaterno' 				=> $faker->lastName,
			'apellidoMaterno' 				=> $faker->lastName,
			'direccion'						=> $faker->address,
			'fechaNacimiento' 				=> $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
			'CURP'							=> $faker->word,
			'telefonoCasa'					=> $faker->phoneNumber,
			'telefonoMovil'					=> $faker->phoneNumber,
			'contactoEmergencia'			=> $faker->phoneNumber,
			'telefonoContactoEmergencia'	=> $faker->phoneNumber,
			'correo'						=> $faker->freeEMail,
			'municipality_id'				=> random_int(1,2577),
			'status_id'						=> 1,
			'employee_id'					=> 1,
		];
});

$factory->define(Escuela\Models\Employee::class, function($faker){
		return[
			'nombre'						=> $faker->firstName,
			'apellidoPaterno' 				=> $faker->lastName,
			'apellidoMaterno' 				=> $faker->lastName,
		];
});
