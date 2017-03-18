<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model {
    // sets up this class to refer to the table nominations, allowing us to access it via eloquent
    protected $table = 'course';

    // allow for soft deletes
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function nomination() {
		return $this->belongsTo('App\Nomination');	
	}
}