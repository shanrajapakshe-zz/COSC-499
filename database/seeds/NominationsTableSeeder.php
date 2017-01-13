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
            'gradDate'=> '2012'
        ]);
    }
}
