<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class viewTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
      #	VIEW TESTS
      #	Dont add a / after localhost pages as it doesnt need it
      $this->visit('/about')
               ->see('Mathematics');

      $this->visit('/about')
               ->see('Physics');

      $this->visit('/profile')
               ->see('Contact');

      $this->visit('admin/award')
               ->see('Second Year Physics');

      $this->visit('nominations/index')
               ->see('Award');

      $this->visit('admin/prof')
               ->see('Bowen');
    }
}
