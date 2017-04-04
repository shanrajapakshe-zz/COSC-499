<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmailTemplate extends Model
{

    use SoftDeletes;
    protected $table = 'emailtemplate';
}
