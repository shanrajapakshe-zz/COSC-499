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
            'id' => 1,
            'firstName' => 'Bowen',
            'lastName' => 'Hui',
            'email' =>'bowen.hui@ubc.ca',
        ]);

        DB::table('prof')->insert([
            'id' => 2,
            'firstName' => 'John',
            'lastName' => 'Hopkinson',
            'email' =>'john.hopkinson@ubc.ca',
        ]);
          factory(App\Prof::class, 2)->create()->each(function($u) {
            $u->prof()->save(factory(App\Prof::class)->make());
          });
    }
}
