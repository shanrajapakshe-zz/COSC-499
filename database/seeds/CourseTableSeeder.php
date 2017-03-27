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
        // DB::table('course')->insert([
        //     'nomination_id' => 1,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2014-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 2,
        //     'courseName' => 'DATA',
        //     'courseNumber' => 301,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 3,
        //     'courseName' => 'VISA',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2015-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 4,
        //     'courseName' => 'PHYS',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2015-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 5,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 110,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 6,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 200,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 7,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 8,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 300,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 9,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 499,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 10,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 499,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);DB::table('course')->insert([
        //     'nomination_id' => 11,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2014-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 12,
        //     'courseName' => 'DATA',
        //     'courseNumber' => 301,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 13,
        //     'courseName' => 'VISA',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2015-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 14,
        //     'courseName' => 'PHYS',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2015-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 15,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 110,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 16,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 200,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 17,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' =>18,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 300,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 19,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 499,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 20,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 499,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);DB::table('course')->insert([
        //     'nomination_id' => 21,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2014-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 22,
        //     'courseName' => 'DATA',
        //     'courseNumber' => 301,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 23,
        //     'courseName' => 'VISA',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2015-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 24,
        //     'courseName' => 'PHYS',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2015-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 25,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 110,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 26,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 200,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 27,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 28,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 300,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 29,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 499,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 30,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 499,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);DB::table('course')->insert([
        //     'nomination_id' => 31,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2014-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 32,
        //     'courseName' => 'DATA',
        //     'courseNumber' => 301,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 33,
        //     'courseName' => 'VISA',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2015-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 34,
        //     'courseName' => 'PHYS',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2015-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' =>35,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 110,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' =>36,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 200,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 37,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 38,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 300,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 39,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 499,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 40,
        //     'courseName' => 'VISA',
        //     'courseNumber' => 499,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 31,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2014-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 32,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 301,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 33,
        //     'courseName' => 'PHYS',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2015-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 34,
        //     'courseName' => 'COSC',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2015-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' =>35,
        //     'courseName' => 'MATH',
        //     'courseNumber' => 110,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' =>36,
        //     'courseName' => 'DATA',
        //     'courseNumber' => 200,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 37,
        //     'courseName' => 'MATH',
        //     'courseNumber' => 101,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 38,
        //     'courseName' => 'DATA',
        //     'courseNumber' => 300,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 39,
        //     'courseName' => 'DATA',
        //     'courseNumber' => 499,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);
        // DB::table('course')->insert([
        //     'nomination_id' => 40,
        //     'courseName' => 'DATA',
        //     'courseNumber' => 499,
        //     'sectionNumber' => 001,
        //     'semester'=> 2,
        //     'finalGrade'=> 99,
        //     'rank' => 0,
        //     'created_at'=>"2017-03-02 18:31:08",
        // ]);

    }
}
