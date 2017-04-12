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
    	//finding bowen in database
        $this->seeInDatabase('users',['firstName'=>'Bowen','email'=>'bowen.hui@ubc.ca','admin'=>1]);

        //check that dummy user is NOT in database
        $this->notSeeInDatabase('users',['firstName'=>'Jon Bon Jovi']);

		//find a Category in the database
		$this->seeInDatabase('Category',['name'=>'Physics']);
		
    }

}
