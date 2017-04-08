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

//USER factory
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker ->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'id' => $faker->numberBetween($min = 150, $max = 500),
    ];
});

$factory->state(\App\User::class,'admin',function (\Faker\Generator $faker){
    return [
        'admin' => 1,
    ];    
});
$factory->state(\App\User::class,'user',function (\Faker\Generator $faker){
    return [
        'admin' => 0,
    ];    
});


//NOMINEE factory
$factory->define(App\Nominee::class, function (Faker\Generator $faker) {
    return [
        'studentNumber' => $faker->numberBetween($min = 10000000, $max = 99999999),
        'firstName' => $faker->firstName,
        'lastName' => $faker ->lastName,
        'email' => $faker->unique()->safeEmail,
        'emailSent' => 0,
    ];
});

//COURSE factory
$factory->define(App\Course::class, function (Faker\Generator $faker) {
    return [
        'courseName' => 'COSC',
        'courseNumber' => $faker->numberBetween($min = 100, $max = 499),
        'sectionNumber' => $faker->numberBetween($min = 1, $max = 2),
        'finalGrade' => $faker->numberBetween($min = 50, $max = 100), 
    ];
});

//Nomination factory
$factory->define(App\Nomination::class, function (Faker\Generator $faker) {
    return [
        'description' => $faker->text($maxNbChars = 200),  
    ];
});
