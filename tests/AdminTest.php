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

    	$this	->actingAs($user)
    			->visit('/admin/awardReport')
    			->seePageIs('/admin/awardReport')
    			->see('Awards Report');
    }
}
