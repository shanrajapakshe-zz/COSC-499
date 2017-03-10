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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Prof::class, function (Faker\Generator $faker){
    return [
    'firstName' =>$faker-> name,
    'lastName'  =>$faker-> name,
    'email'     => $faker->unique()->safeEmail,
    ];
});
$factory->define(App\Course::class, function (Faker\Generator $faker) {
    return [
    'courseName'       =>$faker->  name,
    'courseNumber'     =>$faker->  numberBetween($min = 100, $max = 500),
    'sectionNumber'    =>$faker->  numberBetween($min = 0, $max = 3),
    'semester'         =>$faker->  numberBetween($min = 1, $max = 2),
    'finalGrade'       =>$faker->  numberBetween($min = 75, $max = 100),
    'rank'             =>$faker->  unique()->numberBetween($min = 0, $max = 5),
    ];
});

$factory->define(App\nomination::class, function (Faker\Generator $faker) {
    return [
        'studentNumber' => $faker->randomNumber(8),
        'studentFirstName' => $faker->name,
        'studentLastName' => $faker->name,
        'email' => $faker -> unique()->safeEmail,
        'gradThisYear' => $faker -> numberBetween($min = 0, $max = 1),
        'description' => $faker -> text(),
    ];
});
