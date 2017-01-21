<?php

use Illuminate\Database\Seeder;

class NominationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('nomination')->delete();
        DB::table('nomination')->insert([
            'award_id' => 1,
            'studentNumber' => 12345678,
            'studentFirstName' => 'John',
            'studentLastName' => 'Bon Jovi',
            'gradThisYear'=> 1,
            'email'=>'bon@jovi.com',
            'description'=>"He's a great musician",
            'prof_id'=>1,   
        ]);
    }
}
