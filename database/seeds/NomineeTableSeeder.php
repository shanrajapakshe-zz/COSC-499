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

        DB::table('nominee')->insert([
            'studentNumber' => 12345678,
            'firstName' => 'John',
            'lastName' => 'Bon Jovi',
            'email'=>'bon@jovi.com',
        ]);

        DB::table('nominee')->insert([
            'studentNumber' => 66521148,
            'firstName' => 'Dewan',
            'lastName' => 'Wahid',
            'email'=>'dewan@wahid.com',
        ]);
    }
}
