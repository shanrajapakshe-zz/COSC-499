<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->delete();
        DB::table('category')->insert([
        	'id'=>1,
            'name' => 'Physics',
        ]);

        DB::table('category')->insert([
        	'id'=>2,
            'name' => 'Mathematics',
        ]);

        DB::table('category')->insert([
        	'id'=>3,
            'name' => 'Computer Science',
        ]);

        DB::table('category')->insert([
        	'id'=>4,
            'name' => 'Statistics/Data Science',
        ]);

        DB::table('category')->insert([
        	'id'=>5,
            'name' => 'Distinguished',
        ]);

        DB::table('category')->insert([
        	'id'=>6,
            'name' => 'Other',
        ]);
    }
}
