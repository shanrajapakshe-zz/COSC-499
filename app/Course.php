<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {
    // sets up this class to refer to the table nominations, allowing us to access it via eloquent
    protected $table = 'course';


    protected $dates = ['deleted_at'];

    public function nomination() {
		return $this->belongsTo('App\Nomination');
	}
}
