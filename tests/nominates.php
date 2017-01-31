<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class nominates extends Eloquent
{
    protected $fillable = ['snum', 'sfirstname', 'slastname']
    /**
     * A basic test example.
     *
     * @return void
     */
    public function findsnum($query)
    {
        return $query->where('snum', '==', 41841099)
    }
}
