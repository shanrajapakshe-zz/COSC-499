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
            'courseName0' => 'COSC',
            'courseNumber0' => 101,
            'sectionNumber0' => 001,
            'semester'=> 2,
            'finalGrade0'=> 99,
            'estimatedGrade0'=> 0,
            'rank0' => 0,
        ]);
        factory(App\Course::class, 5)->create()->each(function($u) {
            $u->Course()->save(factory(App\Course::class)->make());
        });    
               
    }
}
