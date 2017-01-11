<?php

use App\Nomination;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(AwardsTableSeeder::class);
        $this->call(NominationsTableSeeder::class);
        $this->call(ProfsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
    }
}
