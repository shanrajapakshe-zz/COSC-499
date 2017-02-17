<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomination extends Model
{
    // sets up this class to refer to the table nominations, allowing us to access it via eloquent
    protected $table = 'nomination';

    public function award() {
		return $this->belongsTo('App\Award');	
	}

	public function prof() {
		return $this->belongsTo('App\Prof');	
	}

	public function course() {
		return $this->hasMany('App\Course');	
	}
}
