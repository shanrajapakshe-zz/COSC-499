<?php

use Illuminate\Database\Seeder;

class AwardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('award')->delete();
        DB::table('award')->insert([
            'name' => 'Second Year Physics',
            'category'=> 'Second Year',
        ]);

        DB::table('award')->insert([
            'name' => 'Second Year Math',
            'category'=> 'Second Year',
        ]);

        DB::table('award')->insert([
            'name' => 'Second Year Physics',
            'category'=> 'Second Year',
        ]);

        DB::table('award')->insert([
            'name' => 'Second Year Data',
            'category'=> 'Second Year',
        ]);

        DB::table('award')->insert([
            'name' => 'Graduating Student',
            'category'=> 'Graduating',
        ]);

        DB::table('award')->insert([
            'name' => 'Upper Year Physics',
            'category'=> 'Upper Year',
        ]);
    }
}
