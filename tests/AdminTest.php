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

    public function testAwardReportCheck()
    {

    	$user = factory(App\User::class)->states('admin')->make();
    	$awards = DB::table('Award')->pluck('name');

    	//Checking user has admin access, so page will be displayed correctly
    	$this	->actingAs($user)
    			->visit('/admin/awardReport')
    			->seePageIs('/admin/awardReport')
    			->see('Awards Report');

    	//Comparing first 10 rows of database Award table is same as what's shown on page's table
    	$count = 0;
    	foreach ($awards as $award ){
    		if($count<10){
    			$this	->actingAs($user)
    					->visit('/admin/awardReport')
    					->seePageIs('/admin/awardReport')
    					->see($award);

    			// echo $award;
    			$count+=1;
    			// echo $count;
    		}
    		else{
    			break;
    		}
    	}
    	
    }

    public function testEditAwards()
    {
    	$user = factory(App\User::class)->states('admin')->make();
    	$awards = DB::table('Award')->pluck('name');

    	//check page access
    	$this	->actingAs($user)
    			->visit('/admin/award')
    			->seePageIs('/admin/award')
    			->see('Edit Awards');


    	//check awards displayed properly
    	foreach ($awards as $award ){
    		$this	->actingAs($user)
    				->visit('/admin/award')
    				->seePageIs('/admin/award')
    				->see($award);
    	}

    	//Adding an award 
    	$this	->actingAs($user)
    			->visit('/admin/award')
    			->dontSee('testaward') //no award named testaward
    			->type('testaward','name')
    			->press('Add')
    			->see('testaward'); //confirms addition was successful

    	//Testing Delete button (first delete button)
    	$this	->actingAs($user)
    			->visit('/admin/award')
    			->see('Physics First Year')
    			->press('Delete')
    			->dontSee('Physics First Year');

    }

    public function testEditCategories()
    {
    	$user = factory(App\User::class)->states('admin')->make();
		$categories = DB::table('Category')->pluck('name');

    	//check page access
    	$this	->actingAs($user)
    			->visit('/admin/categories')
    			->seePageIs('/admin/categories')
    			->see('Award Categories');

    	//check categories displayed properly
    	foreach ($categories as $category ){
    		$this	->actingAs($user)
    				->visit('/admin/categories')
    				->seePageIs('/admin/categories')
    				->see($category);   		
    	}    	

    	//adding a category
    	$this	->actingAs($user)
    			->visit('/admin/categories')
    			->dontSee('testcategory') //no category called testcategory
    			->type('testcategory','name')
    			->press('Add')  		
    			->see('testcategory');  //confirms addition was successful
    } 

    public function testEditProfessors()
    {
    	$user = factory(App\User::class)->states('admin')->make();
		$professors = DB::table('users')->pluck('firstName');

    	//check page access
    	$this	->actingAs($user)
    			->visit('/admin/prof')
    			->seePageIs('/admin/prof')
    			->see('Professor Report'); 

    	//check Professors displayed properly
    	foreach ($professors as $professor ){
    		$this	->actingAs($user)
    				->visit('/admin/prof')
    				->seePageIs('/admin/prof')
    				->see($professor);   		
    	}   
    	//adding a professor
    	$this 	->actingAs($user)
    			->visit('/admin/prof')
    			->dontSee('TestFName')
    			->type('TestFName','firstName')
    			->type('TestLName','lastName')    
    			->type('testEmail@test.com','email')
    			->press('Add')
    			->see('TestFName');

    	//Testing Delete button (first delete button)
    	$this	->actingAs($user)
    			->visit('/admin/prof')
    			->see('Bowen')
    			->press('Delete')
    			->dontSee('Bowen');    	
    }
}
