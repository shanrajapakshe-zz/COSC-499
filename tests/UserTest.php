<?php

// use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    use DatabaseTransactions;

    public function testHomePageButtons()
    {
    	$user = factory(App\User::class)->states('user')->make();

    	//Testing Homepage visited correctly
    	$this	->actingAs($user)
    			->visit('/')
    			->seePageIs('/');

    	//Testing Homepage button works properly
        $this	->actingAs($user)
        		->visit('/')
        		->click('Unit 5 Awards')
    			->seePageIs('/');

    	//Testing Create Nomination button
        $this	->actingAs($user)
        		->visit('/')
        		->click('Create Nomination')
    			->seePageIs('/nominations/create');        		

       	//Testing About button 
       	$this	->actingAs($user)
        		->visit('/')
        		->click('About')
				->seePageIs('/about');

        //Testing My Nominations button
       	$this	->actingAs($user)
        		->visit('/')
        		->click('My Nominations')
        		->seePageIs('/nominations/index');

       	//Testing Logout Button
       	$this	->actingAs($user)
        		->visit('/')
        		->click('Log Out')        
        		->seePageIs('/login');

        //Testing Access to Admin Pages
        $this   ->actingAs($user)
                ->visit('/')
                ->click('Admin Page')
                ->seePageIs('/admin/awardReport')
                ->See('No Access');                

 

    }
    public function testNomination()
    {

        $user = factory(App\User::class)->states('user')->make();
        $nominee = factory(App\Nominee::class)->make();
        $course = factory(App\Course::class)->make();
        $nomination = factory(App\Nomination::class)->make();

        // Create Nomination
        $this   ->actingAs($user)
                ->visit('/nominations/create')
                ->select('First Year Computer Science','award')
                ->type($nominee['studentNumber'],'studentNumber')
                ->type($nominee['firstName'],'studentFirstName')
                ->type($nominee['lastName'],'studentLastName')
                ->type($course['courseName'],'courseName0')
                ->type($course['courseNumber'],'courseNumber0')
                ->type('00'.$course['sectionNumber'],'sectionNumber0')
                ->type($course['finalGrade'],'finalGrade0')
                ->type($nomination['description'],'description')
                ->press('Nominate!');
        
        //check Nomination is there
        //nominee's name would only be there if nomination was successful
        $this   ->actingAs($user)
                ->visit('/nominations/index')
                ->See($nominee['firstName']); 


        // Remove Nomination
        //Nominee's name is not there anymore if remove is successful
        $this   ->actingAs($user)
                ->visit('/nominations/index')
                ->press('Remove')
                ->dontSee($nominee['firstName']);
    }

}
