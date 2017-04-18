<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DatabaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDatabaseSearch()
    {
    	//finding Bowen in database (first seeded user)
        $this->seeInDatabase('users',['firstName'=>'Bowen','email'=>'bowen.hui@ubc.ca','admin'=>1]);

        //finding Hiroko in database (last seeded user)
        $this->seeInDatabase('users',['firstName'=>'Hiroko','email'=>'hiroko.nakahara@ubc.ca','admin'=>1]);

        //check that dummy user is NOT in database
        $this->notSeeInDatabase('users',['firstName'=>'Jon Bon Jovi']);

		//find first Category in the database
		$this->seeInDatabase('Category',['name'=>'Physics']);
		
        //find last Category in the database
        $this->seeInDatabase('Category',['name'=>'Other']);

    }

}
