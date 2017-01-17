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
            'nominationNo' => 1,
            'name' => 'COSC 101',
            'section' => 001,
            'semester'=> 2,
            'grade'=> 99,
            'estimatedGrade'=> 0,
            'estimatedRank' => 0,
        ]);
    }
}
