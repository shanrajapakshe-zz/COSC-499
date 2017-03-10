<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nominee extends Model
{
    // sets up this class to refer to the table nominations, allowing us to access it via eloquent
    protected $table = 'nominee';

    public function nomination() {
		return $this->belongsTo('App\Nomination');	
	}
}
