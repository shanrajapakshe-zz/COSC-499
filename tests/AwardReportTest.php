<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AwardReportTest extends TestCase
{
    /**
     * Testing if the value (count) on the screen is the same as the count of nominations in the database.
     *		Join 'award' and 'nominations' over award_id and groupby award_id
     *
     * @return void
     */
    public function testAwardCount()
    {
        $this	->visit('/admin/awardReport')
        		->see('4');
        $users = DB::select('SELECT award.id, award.name, count(award.name) as myCount FROM award RIGHT OUTER JOIN nomination ON award.id=nomination.award_id GROUP BY award.name');
        // Insert a statement where it retrives the value from the sql statement. We can also add certain award category and its value.
        
    }
}
