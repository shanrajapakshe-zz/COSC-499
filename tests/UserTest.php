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
    public function testHomePageButtons()
    {
    	$user = factory(App\User::class)->states('user')->create();

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
        $this ->assertTrue(true);
    }

}
