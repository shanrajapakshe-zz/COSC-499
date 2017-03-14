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
            'rank' => 0,
            'created_at'=>"2014-03-02 18:31:08",
        ]);
        DB::table('course')->insert([
            'nomination_id' => 2,
            'courseName' => 'DATA',
            'courseNumber' => 301,
            'sectionNumber' => 001,
            'semester'=> 2,
            'finalGrade'=> 99,
            'rank' => 0,
            'created_at'=>"2017-03-02 18:31:08",
        ]);
        DB::table('course')->insert([
            'nomination_id' => 3,
            'courseName' => 'VISA',
            'courseNumber' => 101,
            'sectionNumber' => 001,
            'semester'=> 2,
            'finalGrade'=> 99,
            'rank' => 0,
            'created_at'=>"2015-03-02 18:31:08",
        ]);
        DB::table('course')->insert([
            'nomination_id' => 4,
            'courseName' => 'PHYS',
            'courseNumber' => 101,
            'sectionNumber' => 001,
            'semester'=> 2,
            'finalGrade'=> 99,
            'rank' => 0,
            'created_at'=>"2015-03-02 18:31:08",
        ]);
        DB::table('course')->insert([
            'nomination_id' => 5,
            'courseName' => 'COSC',
            'courseNumber' => 110,
            'sectionNumber' => 001,
            'semester'=> 2,
            'finalGrade'=> 99,
            'rank' => 0,
            'created_at'=>"2017-03-02 18:31:08",
        ]);
        DB::table('course')->insert([
            'nomination_id' => 6,
            'courseName' => 'COSC',
            'courseNumber' => 200,
            'sectionNumber' => 001,
            'semester'=> 2,
            'finalGrade'=> 99,
            'rank' => 0,
            'created_at'=>"2017-03-02 18:31:08",
        ]);
        DB::table('course')->insert([
            'nomination_id' => 7,
            'courseName' => 'COSC',
            'courseNumber' => 101,
            'sectionNumber' => 001,
            'semester'=> 2,
            'finalGrade'=> 99,
            'rank' => 0,
            'created_at'=>"2017-03-02 18:31:08",
        ]);
        DB::table('course')->insert([
            'nomination_id' => 8,
            'courseName' => 'COSC',
            'courseNumber' => 300,
            'sectionNumber' => 001,
            'semester'=> 2,
            'finalGrade'=> 99,
            'rank' => 0,
            'created_at'=>"2017-03-02 18:31:08",
        ]);
        DB::table('course')->insert([
            'nomination_id' => 9,
            'courseName' => 'COSC',
            'courseNumber' => 499,
            'sectionNumber' => 001,
            'semester'=> 2,
            'finalGrade'=> 99,
            'rank' => 0,
            'created_at'=>"2017-03-02 18:31:08",
        ]);
    }
}
