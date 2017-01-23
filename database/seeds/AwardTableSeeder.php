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
            'id' => 1,
            'name' => 'Second Year Physics',
            'category'=> 'Second Year',
        ]);

        DB::table('award')->insert([
            'id' => 2,
            'name' => 'Second Year Math',
            'category'=> 'Second Year',
        ]);

        DB::table('award')->insert([
            'id' => 3,
            'name' => 'Second Year Physics',
            'category'=> 'Second Year',
        ]);

        DB::table('award')->insert([
            'id' => 4,
            'name' => 'Second Year Data',
            'category'=> 'Second Year',
        ]);

        DB::table('award')->insert([
            'id' => 5,
            'name' => 'Graduating Student',
            'category'=> 'Graduating',
        ]);

        DB::table('award')->insert([
            'id' => 6,
            'name' => 'Upper Year Physics',
            'category'=> 'Upper Year',
        ]);
    }
}
