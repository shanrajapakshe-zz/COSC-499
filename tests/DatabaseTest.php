<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DatabaseTest extends TestCase
{
		use DatabaseTransactions;

		public function setUp()
		{
			parent::setUp();

			Artisan::call('migrate');
		}

		#USE DatabaseMigrations;
		/**
     * A basic test example.
     *
     * @return void
     */
    public function testDatabase()
    {
		#USE WithoutMiddleware

		$this->visit('/about')
             ->see('Mathematics');

		$this->visit('/about')
             ->see('Physics');

		$this->visit('/profile')
             ->see('Contact');

		$this->seeInDatabase('nomination', ['studentNumber' => '12345678']);

		$this->seeInDatabase('nomination', ['studentFirstName' => 'John']);

		$this->seeInDatabase('nomination', ['email' => 'bon@jovi.com']);

		#$this->assertTrue($nomination
			 #->has('John'));

		#$response = $this->call('GET', 'user/profile');
		#$response = $this->call($method, $uri, $parameters, $cookies, $files, $server, $content);
		#$this->assertEquals('Hello World', $response->getContent());

		#$response = $this->action('GET', 'AdminController');
		#$response = $this->action('GET', 'Adminontroller@profile', ['user' => 1]);

		#$response = $this->action('GET', '\nominations\index');
		#$view = $response->original;
		#$this->assertEquals('Omer', $view['name']);

		#$this->visit('/nominations/create')
             #->see('create');

		#$this->visit('/nominations/index')
             #->see('Award');

		#$this->visit('/admin/award')
             #->see('Second Year Physics');

		#Here it needs a class named nominations
		#		php artisan generate model nominate (this does not work)
		#		php artisan make:model nominate -m (this WORKED)
		#Did mapping so we could just run test easily
		#		:nmap ,t :!clear && phpunit tests/DatabaseTest.php<cr>
		#No Such table issue
		#		php artisan generate:migration create_nominations_table --fields="snum:integer, sfirstname:string, slastname:string"
		#This is not necessary (as a function is made to take care of the database in memory)
		#		php artisan migrate --env=testing
		#nominates::create(['snum' => '41841099', 'sfirstname' => 'Omer', 'slastname' => 'Cheema']);
		#nominates::create(['snum' => '31284920', 'sfirstname' => 'John', 'slastname' => 'Doe']);

		#$nominations = nominates::findsnum()->get();

		#$this->assertCount(1, $nominations);

    }
}
