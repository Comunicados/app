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
$factory->define(Comunicados\StudentCourseSubject::class, function (Faker\Generator $faker) {

    return [

    'alumno_id'=>$faker->randomElement($array = array ('20456732','26031051','26982512','27214037','28152998','29578561','32238237','32267202','33213897','33247459','33473119','33769925','34246240','34996571','35888974','36295193','36773726','38146895')) ,
    'materia_id'=>$faker->numberBetween($min = 1 , $max = 50),
    'curso_id'=>$faker->numberBetween($min = 1 , $max = 53),
    'fecha'=>$faker->date($format = 'Y-m-d', $max = 'now'),
    'asiste?'=>$faker->randomElement($array = array ('0', '1')) ,
    'justificativo_url'=>'/img/users/justificativos/1.jpg,' 

    ];
});