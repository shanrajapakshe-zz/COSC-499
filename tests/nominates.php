<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class nominates extends testCase
{
    protected $fillable = ['snum', 'sfirstname', 'slastname']
    public function findsnum($query)
    {
        return $query->where('snum', '==', 41841099)
    }
}
