<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
    public function report() {
        return view('admin.report');
    }

    public function search() {
        return view('admin.search');
    }
}