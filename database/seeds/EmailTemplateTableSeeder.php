<?php

use Illuminate\Database\Seeder;

class EmailTemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emailTemplate')->delete();

        DB::table('emailTemplate')->insert([
            'id' => 1,
            'text'=>"You have been nominated for a Unit 5 Award. We are holding a reception to celebrate your achievements. Please attend at the UNC Ballroom (UNC 200) on Thursday April 20th.",
        ]);
    }
}
