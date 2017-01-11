<?php

use Illuminate\Database\Seeder;

class AwardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('awards')->delete();
        DB::table('awards')->insert([
            'id' => 1,
            'awardName' => 'First Year Stats',
        ]);

        DB::table('awards')->insert([
            'id' => 2,
            'awardName' => 'First Year Physics',
        ]);

        DB::table('awards')->insert([
            'id' => 3,
            'awardName' => 'First Year Math',
        ]);

        DB::table('awards')->insert([
            'id' => 4,
            'awardName' => 'First Year COSC',
        ]);

        DB::table('awards')->insert([
            'id' => 5,
            'awardName' => 'First Year DATA',
        ]);
    }
}
