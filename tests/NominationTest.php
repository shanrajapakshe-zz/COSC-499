<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NominationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSubmitForm()
    {
        $this	->visit('/nominations/create')
        		->select('Second Year Math','award')
        		->type('12345678','studentNumber')
        		->type('John','studentFirstName')
        		->type('Doe','studentLastName')
        		->type('COSC','courseName0')
        		->type('499','courseNumber0')
        		->type('001','sectionNumber0')
        		->type('95','finalGrade0')
        		->type('1','rank0')
        		->type('test description','description')
        		->press('Nominate!');
    }
}
