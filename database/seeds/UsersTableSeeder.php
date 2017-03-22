<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'id' => 1,
            'firstName' => 'Bowen',
            'lastName' => 'Hui',
            'email' =>'bowen.hui@ubc.ca',
            'password'=>bcrypt('bhui'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'firstName' => 'John',
            'lastName' => 'Hopkinson',
            'email' =>'john.hopkinson@ubc.ca',
            'password'=>bcrypt('jhop'),
            'admin'=>1,
        ]);
    }
}
