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
            'created_at'=>"2014-03-02 18:31:08",
            'prof_id'=>1,
        ]);

        DB::table('nomination')->insert([
            'award_id' => 2,
            'studentNumber' => 66521148,
            'studentFirstName' => 'Dewan',
            'studentLastName' => 'Wahid',
            'gradThisYear'=> 1,
            'email'=>'dewan@wahid.com',
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'prof_id'=>1,
        ]);

        DB::table('nomination')->insert([
            'award_id' => 4,
            'studentNumber' => 65421148,
            'studentFirstName' => 'tom',
            'studentLastName' => 'blow',
            'gradThisYear'=> 1,
            'email'=>'dewan@wahid.com',
            'created_at'=>"2015-03-02 18:31:08",
            'description'=>"He is really good",
            'prof_id'=>1,
        ]);

        DB::table('nomination')->insert([
            'award_id' => 4,
            'studentNumber' => 12321148,
            'studentFirstName' => 'De',
            'studentLastName' => 'Wan',
            'gradThisYear'=> 1,
            'email'=>'dewan@wahid.com',
            'created_at'=>"2015-03-02 18:31:08",
            'description'=>"He is really good",
            'prof_id'=>1,
        ]);

        DB::table('nomination')->insert([
            'award_id' => 4,
            'studentNumber' => 85221148,
            'studentFirstName' => 'Dewan',
            'studentLastName' => 'Wahid',
            'gradThisYear'=> 1,
            'email'=>'dewan@wahid.com',
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'prof_id'=>1,
        ]);

        DB::table('nomination')->insert([
            'award_id' => 6,
            'studentNumber' => 14721148,
            'studentFirstName' => 'Don',
            'studentLastName' => 'Wahid',
            'gradThisYear'=> 1,
            'email'=>'dewan@wahid.com',
            'created_at'=>"2014-03-02 18:31:08",
            'description'=>"He is really good",
            'prof_id'=>1,
        ]);

        DB::table('nomination')->insert([
            'award_id' => 2,
            'studentNumber' => 96321148,
            'studentFirstName' => 'gao',
            'studentLastName' => 'Weeho',
            'gradThisYear'=> 1,
            'email'=>'dewan@wahid.com',
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'prof_id'=>1,
        ]);

        DB::table('nomination')->insert([
            'award_id' => 6,
            'studentNumber' => 35721148,
            'studentFirstName' => 'kevin',
            'studentLastName' => 'whq',
            'gradThisYear'=> 1,
            'email'=>'dewan@wahid.com',
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'prof_id'=>1,
        ]);

        DB::table('nomination')->insert([
            'award_id' => 6,
            'studentNumber' => 45621148,
            'studentFirstName' => 'joh',
            'studentLastName' => 'Wahid',
            'gradThisYear'=> 1,
            'email'=>'dewan@wahid.com',
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'prof_id'=>1,
        ]);

          
    }
}
