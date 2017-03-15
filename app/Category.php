<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model {
	
	// sets up this class to refer to the table nominations, allowing us to access it via eloquent

    protected $table = 'category';

    // allow for soft deletes
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function award() {
    	return $this->hasMany('App\Award');
    }
}