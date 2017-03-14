<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	
	// sets up this class to refer to the table nominations, allowing us to access it via eloquent

    protected $table = 'category';

    public function award() {
    	return $this->hasMany('App\Award');
    }
}