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
          'award_id' => 11,
          'nominee_id' =>12345678,
          'description'=>"He's a great musician",
          'created_at'=>"2014-03-02 18:31:08",
          'user_id'=>1,
      ]);

      DB::table('nomination')->insert([
          'award_id' => 12,
          'nominee_id' =>66521148,
          'created_at'=>"2017-03-02 18:31:08",
          'description'=>"He is really good",
          'user_id'=>1,
      ]);

      DB::table('nomination')->insert([
          'award_id' => 13,
          'nominee_id' =>67521148,
          'created_at'=>"2017-03-02 18:31:08",
          'description'=>"He is really good",
          'user_id'=>1,
      ]);
      DB::table('nomination')->insert([
          'award_id' => 15,
          'nominee_id' =>68521148,
          'created_at'=>"2017-03-02 18:31:08",
          'description'=>"He is really good",
          'user_id'=>1,
      ]);
      DB::table('nomination')->insert([
          'award_id' => 16,
          'nominee_id' =>69521148,
          'created_at'=>"2017-03-02 18:31:08",
          'description'=>"He is really good",
          'user_id'=>1,
      ]);
        DB::table('nomination')->insert([
            'award_id' => 1,
            'nominee_id' =>12345678,
            'description'=>"He's a great musician",
            'created_at'=>"2014-03-02 18:31:08",
            'user_id'=>1,
        ]);

        DB::table('nomination')->insert([
            'award_id' => 2,
            'nominee_id' =>66521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);

        DB::table('nomination')->insert([
            'award_id' => 3,
            'nominee_id' =>67521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 4,
            'nominee_id' =>68521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 5,
            'nominee_id' =>69521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 6,
            'nominee_id' =>70521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 7,
            'nominee_id' =>71521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 8,
            'nominee_id' =>72521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 9,
            'nominee_id' =>73521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 10,
            'nominee_id' =>74521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 11,
            'nominee_id' =>75521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 12,
            'nominee_id' =>76521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 13,
            'nominee_id' =>77521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 14,
            'nominee_id' =>78521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 15,
            'nominee_id' =>79521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 16,
            'nominee_id' =>80521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 1,
            'nominee_id' =>81521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 2,
            'nominee_id' =>82521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 3,
            'nominee_id' =>83521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 4,
            'nominee_id' =>84521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 5,
            'nominee_id' =>85521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 6,
            'nominee_id' =>86521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 7,
            'nominee_id' =>87521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 8,
            'nominee_id' =>88521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 9,
            'nominee_id' =>89521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 10,
            'nominee_id' =>90521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 11,
            'nominee_id' =>91521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 12,
            'nominee_id' =>92521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 13,
            'nominee_id' =>92521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 2,
            'nominee_id' =>66521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>2,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 3,
            'nominee_id' =>62521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>2,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 4,
            'nominee_id' =>93521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 16,
            'nominee_id' =>66521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 15,
            'nominee_id' =>99521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);
        DB::table('nomination')->insert([
            'award_id' => 14,
            'nominee_id' =>98521148,
            'created_at'=>"2017-03-02 18:31:08",
            'description'=>"He is really good",
            'user_id'=>1,
        ]);



    }
}
