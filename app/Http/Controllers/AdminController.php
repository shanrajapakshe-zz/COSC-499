<?php

namespace App\Http\Controllers;

use App\Nomination;
use App\Award;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function report() {
        $awards = Award::all();
        return view('admin.report')->with('awards', $awards);
    }

    public function search() {
        return view('admin.search');
    }

	public function nominations() {
        $awards = Award::all();
        $nominations = Nomination::all();
        return view('admin.nominations')->with('nominations', $nominations)->with('awards',$awards);
    }

}
