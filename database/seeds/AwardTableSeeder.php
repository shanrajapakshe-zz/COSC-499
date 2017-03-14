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
            // First Year Physics
            'id' => 1,
            'name' => 'First Year',
            'category_id' => 1,
        ]);

        DB::table('award')->insert([
            // First Year Mathematics
            'id' => 2,
            'name' => 'First Year',
            'category_id' => 2,
        ]);

        DB::table('award')->insert([
            // First Year Computer Science
            'id' => 3,
            'name' => 'First Year',
            'category_id' => 3,
        ]);

        DB::table('award')->insert([
            // Second Year Physics
            'id' => 4,
            'name' => 'Second Year',
            'category_id' => 1,
        ]);

        DB::table('award')->insert([
            // Second Year Mathematics
            'id' => 5,
            'name' => 'Second Year',
            'category_id' => 2,
        ]);

        DB::table('award')->insert([
            // Second Year Computer Science
            'id' => 6,
            'name' => 'Second Year',
            'category_id' => 3,
        ]);

        DB::table('award')->insert([
            // Second Year Statistics
            'id' => 7,
            'name' => 'Second Year',
            'category_id' => 4,
        ]);

        DB::table('award')->insert([
            // Upper Year (returning) Physics
            'id' => 8,
            'name' => 'Upper Year (returning)',
            'category_id' => 1,
        ]);

        DB::table('award')->insert([
            // Upper Year (returning) Mathematics
            'id' => 9,
            'name' => 'Upper Year (returning)',
            'category_id' => 2,
        ]);

        DB::table('award')->insert([
            // Upper Year (returning) Computer Science
            'id' => 10,
            'name' => 'Upper Year (returning)',
            'category_id' => 3,
        ]);

        DB::table('award')->insert([
            // Upper Year (returning) Statistics/Data Science
            'id' => 11,
            'name' => 'Upper Year (returning)',
            'category_id' => 4,
        ]);

        DB::table('award')->insert([
            // Graduating Physics
            'id' => 12,
            'name' => 'Graduating',
            'category_id' => 1,
        ]);

        DB::table('award')->insert([
            // Graduating Mathematics
            'id' => 13,
            'name' => 'Graduating',
            'category_id' => 2,
        ]);

        DB::table('award')->insert([
            // Graduating Computer Science
            'id' => 14,
            'name' => 'Graduating',
            'category_id' => 3,
        ]);

        DB::table('award')->insert([
            // Graduating Statistics/Data Science
            'id' => 15,
            'name' => 'Graduating',
            'category_id' => 4,
        ]);

        DB::table('award')->insert([
            // Distinguished Graduating Student
            'id' => 16,
            'name' => 'Graduating Student',
            'category_id' => 5,
        ]);
    }
}
