<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminNominatiosTest extends TestCase
{
    /**
     *	This Test is to show if the method is pulling the right table. 
     *	
     *	Can we compare tables? 
     *	How do we match 2 tables and assert that it is indeed showing what we need it to show.
     *	Using the query to get all nominations
     *
     *	SELECT award.name, prof.firstName, prof.lastname, nomination.studentNumber, nomination.studentFirstName, nomination.studentLastName, nomination.created_at, course.courseName0, course.courseNumber0, course.finalGrade0
		FROM `nomination` INNER JOIN `prof` INNER JOIN `award` INNER JOIN `course`
		ON nomination.prof_id = prof.id AND nomination.award_id = award.id AND nomination.id = course.nomination_id
     *
     *	HOWEVER, this does not bring the right result. IT only results in a row that has all the values
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
