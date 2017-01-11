<?php

use Illuminate\Database\Seeder;

class NominationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('nominations')->delete();
        DB::table('nominations')->insert([
            'studentNum' => "12345678",
            'studentFirstName' => 'John',
            'studentLastName' => 'Bon Jovi',
            'course' => 'COSC 101',
            'section' => '001',
            'actGrade' => '90',
            'estGrade' => '',
            'estRank' => '',
            'description' => 'For he is a jolly good student',
            'awardID' => 1,
        ]);
    }
}
