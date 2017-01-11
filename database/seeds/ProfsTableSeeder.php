<?php

use Illuminate\Database\Seeder;

class ProfsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profs')->delete();
        DB::table('profs')->insert([
            'id' => 1,
            'firstName' => 'Bowen',
            'lastName' => 'Hui',
        ]);
    }
}
