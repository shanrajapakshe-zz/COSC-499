<?php

use Illuminate\Database\Seeder;

class NomineeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nominee')->delete();

        DB::table('nominee')->insert([
            'studentNumber' => 12345678,
            'firstName' => 'John',
            'lastName' => 'Bon Jovi',
            'email'=>'bon@jovi.com',
        ]);

        DB::table('nominee')->insert([
            'studentNumber' => 66521148,
            'firstName' => 'Dewan',
            'lastName' => 'Wahid',
            'email'=>'dewan@wahid.com',
        ]);

        DB::table('nominee')->insert([
            'studentNumber' => 62521148,
            'firstName' => 'thao',
            'lastName' => 'Fann',
            'email'=>'thao@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 67521148,
            'firstName' => 'shannan',
            'lastName' => 'dery',
            'email'=>'dery@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 68521148,
            'firstName' => 'Renee',
            'lastName' => 'JAck',
            'email'=>'renee@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 69521148,
            'firstName' => 'ean',
            'lastName' => 'jack',
            'email'=>'ean@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 70821148,
            'firstName' => 'Cinda',
            'lastName' => 'frank',
            'email'=>'franlk@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 71521148,
            'firstName' => 'Brice',
            'lastName' => 'lam',
            'email'=>'lam@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 72521148,
            'firstName' => 'Basil',
            'lastName' => 'branco',
            'email'=>'branco@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 73529148,
            'firstName' => 'Virgil',
            'lastName' => 'Frank',
            'email'=>'Frank.khan@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 74521148,
            'firstName' => 'Gwenn',
            'lastName' => 'kim',
            'email'=>'kim@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 75521148,
            'firstName' => 'Hollie',
            'lastName' => 'Aim',
            'email'=>'deAimwan@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 76521148,
            'firstName' => 'Meriene',
            'lastName' => 'bekey',
            'email'=>'bekey@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 77521148,
            'firstName' => 'vSturgell ',
            'lastName' => 'Winnett  ',
            'email'=>'Winnett@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 78521148,
            'firstName' => 'Verlie ',
            'lastName' => 'Bieniek  ',
            'email'=>'Sherly@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 79521148,
            'firstName' => 'Bieniek  ',
            'lastName' => 'Verlie ',
            'email'=>'Seifert@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 80521148,
            'firstName' => 'Sherly ',
            'lastName' => 'Bieniek',
            'email'=>'Bieniek@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 81521148,
            'firstName' => 'Lowell',
            'lastName' => 'Roane ',
            'email'=>'Roane@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 82521148,
            'firstName' => 'Roane',
            'lastName' => 'Lowell',
            'email'=>'Betton@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 83521148,
            'firstName' => 'Betton',
            'lastName' => 'Betton',
            'email'=>'dewans@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 85521148,
            'firstName' => 'Sipp',
            'lastName' => 'Wahid',
            'email'=>'dewansip@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 84521148,
            'firstName' => 'Dewan',
            'lastName' => 'Sipp  ',
            'email'=>'dewadeqann@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 86521148,
            'firstName' => 'Bernardina',
            'lastName' => 'Wentworth',
            'email'=>'dewabrendina@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 87521148,
            'firstName' => 'Janiece',
            'lastName' => 'Seifert  ',
            'email'=>'dewanjanis@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 88521148,
            'firstName' => 'Dandrea',
            'lastName' => 'Janiece',
            'email'=>'dewadarinn@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 89521148,
            'firstName' => 'Tisha ',
            'lastName' => 'Wahid',
            'email'=>'dewantish@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 90521148,
            'firstName' => 'Major  ',
            'lastName' => 'Martine ',
            'email'=>'dewanmajor@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 91521148,
            'firstName' => 'Dewan',
            'lastName' => 'Martine ',
            'email'=>'dewanmartine@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 92521148,
            'firstName' => 'Martine',
            'lastName' => 'Erlene',
            'email'=>'dewanerlene@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 93521148,
            'firstName' => 'Schroeter',
            'lastName' => 'Tipping',
            'email'=>'dewatippingn@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 98521148,
            'firstName' => 'Maranda',
            'lastName' => 'Glass',
            'email'=>'dewanmaranda@wahid.com',
        ]);
        DB::table('nominee')->insert([
            'studentNumber' => 99521148,
            'firstName' => 'Elinor',
            'lastName' => 'Glass',
            'email'=>'dewanglass@wahid.com',
        ]);




    }
}
