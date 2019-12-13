<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vacancies;
use Faker\Generator as Faker;

$factory->define(Vacancies::class, function (Faker $faker) {
    return [

        'name_company' => $faker->name,
        'address' => $faker->address,
        'office' => $faker->text(20),
        'linkedin' => "https://www.linkedin.com/in/{$faker->userName}/"
    
    ];
});
