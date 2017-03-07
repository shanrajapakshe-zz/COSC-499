<?php

use Illuminate\Database\Seeder;

class NomineeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nominee')->delete();

        DB::table('nomination')->insert([
            'studentNumber' => 12345678,
            'studentFirstName' => 'John',
            'studentLastName' => 'Bon Jovi',
            'email'=>'bon@jovi.com',
        ]);

        DB::table('nomination')->insert([
            'studentNumber' => 66521148,
            'studentFirstName' => 'Dewan',
            'studentLastName' => 'Wahid',
            'email'=>'dewan@wahid.com',
        ]);
    }
}
