<?php

use Illuminate\Database\Seeder;

class ProfTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prof')->delete();
        DB::table('prof')->insert([
            'professorNo' => 1,
            'firstName' => 'Bowen',
            'lastName' => 'Hui',
            'email' =>'bowen.hui@ubc.ca',
        ]);
    }
}
