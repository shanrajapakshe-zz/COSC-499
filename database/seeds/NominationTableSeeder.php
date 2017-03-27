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
      // DB::table('nomination')->insert([
      //     'award_id' => 11,
      //     'studentNumber' =>12345678,
      //     'description'=>"He's a great musician",
      //     'created_at'=>"2014-03-02 18:31:08",
      //     'user_id'=>1,
      // ]);
      //
      // DB::table('nomination')->insert([
      //     'award_id' => 12,
      //     'studentNumber' =>66521148,
      //     'created_at'=>"2017-03-02 18:31:08",
      //     'description'=>"He is really good",
      //     'user_id'=>1,
      // ]);
      //
      // DB::table('nomination')->insert([
      //     'award_id' => 13,
      //     'studentNumber' =>67521148,
      //     'created_at'=>"2017-03-02 18:31:08",
      //     'description'=>"He is really good",
      //     'user_id'=>1,
      // ]);
      // DB::table('nomination')->insert([
      //     'award_id' => 15,
      //     'studentNumber' =>68521148,
      //     'created_at'=>"2017-03-02 18:31:08",
      //     'description'=>"He is really good",
      //     'user_id'=>1,
      // ]);
      // DB::table('nomination')->insert([
      //     'award_id' => 16,
      //     'studentNumber' =>69521148,
      //     'created_at'=>"2017-03-02 18:31:08",
      //     'description'=>"He is really good",
      //     'user_id'=>1,
      // ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 1,
      //       'studentNumber' =>12345678,
      //       'description'=>"He's a great musician",
      //       'created_at'=>"2014-03-02 18:31:08",
      //       'user_id'=>1,
      //   ]);
      //
      //   DB::table('nomination')->insert([
      //       'award_id' => 2,
      //       'studentNumber' =>66521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //
      //   DB::table('nomination')->insert([
      //       'award_id' => 3,
      //       'studentNumber' =>67521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 4,
      //       'studentNumber' =>68521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 5,
      //       'studentNumber' =>69521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 6,
      //       'studentNumber' =>70521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 7,
      //       'studentNumber' =>71521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 8,
      //       'studentNumber' =>72521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 9,
      //       'studentNumber' =>73521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 10,
      //       'studentNumber' =>74521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 11,
      //       'studentNumber' =>75521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 12,
      //       'studentNumber' =>76521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 13,
      //       'studentNumber' =>77521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 14,
      //       'studentNumber' =>78521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 15,
      //       'studentNumber' =>79521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 16,
      //       'studentNumber' =>80521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 1,
      //       'studentNumber' =>81521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 2,
      //       'studentNumber' =>82521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 3,
      //       'studentNumber' =>83521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 4,
      //       'studentNumber' =>84521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 5,
      //       'studentNumber' =>85521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 6,
      //       'studentNumber' =>86521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 7,
      //       'studentNumber' =>87521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 8,
      //       'studentNumber' =>88521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 9,
      //       'studentNumber' =>89521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 10,
      //       'studentNumber' =>90521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 11,
      //       'studentNumber' =>91521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 12,
      //       'studentNumber' =>92521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 13,
      //       'studentNumber' =>92521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 2,
      //       'studentNumber' =>66521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>2,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 3,
      //       'studentNumber' =>62521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>2,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 4,
      //       'studentNumber' =>93521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 16,
      //       'studentNumber' =>66521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 15,
      //       'studentNumber' =>99521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);
      //   DB::table('nomination')->insert([
      //       'award_id' => 14,
      //       'studentNumber' =>98521148,
      //       'created_at'=>"2017-03-02 18:31:08",
      //       'description'=>"He is really good",
      //       'user_id'=>1,
      //   ]);



    }
}
