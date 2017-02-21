<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->delete();
        DB::table('course')->insert([
            'nomination_id' => 1,
            'courseName' => 'COSC',
            'courseNumber' => 101,
            'sectionNumber' => 001,
            'semester'=> 2,
            'finalGrade'=> 99,
            'estimatedGrade'=> 0,
            'rank' => 0,
        ]);
        factory(App\Course::class, 5)->create()->each(function($u) {
            $u->Course()->save(factory(App\Course::class)->make());
        });    
               
    }
}
