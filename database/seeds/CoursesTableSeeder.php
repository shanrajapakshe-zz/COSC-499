<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->delete();
        DB::table('courses')->insert([
            'id' => 1,
            'courseName' => 'COSC 101',
        ]);
    }
}
