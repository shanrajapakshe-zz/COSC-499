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
            'studentNumber' =>12345678,
            'description'=>"He's a great musician",
            'created_at'=>"2014-03-02 18:31:08",
            'prof_id'=>1,
        ]);

        DB::table('nomination')->insert([
            'award_id' => 2,
            'studentNumber' =>66521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'prof_id'=>1,
        ]);         
    }
}
