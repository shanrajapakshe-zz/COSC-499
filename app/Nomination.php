<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomination extends Model
{
    // sets up this class to refer to the table nominations, allowing us to access it via eloquent
    protected $table = 'nomination';

    public function award() {
		return $this->hasMany('App\Award');	
	}
}
