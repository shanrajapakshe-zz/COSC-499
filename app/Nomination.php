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

	public function user() {
		return $this->belongsTo('App\User');
	}

	public function course() {
		return $this->hasMany('App\Course');
	}

	public function nominee() {
		return $this->belongsTo('App\Nominee');
	}
}
