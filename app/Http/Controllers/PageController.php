<?php

namespace App\Http\Controllers;

// to access other stuff, use keyword 'use'
// ie. use Instance

class PageController extends Controller {
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getIndex() {
        return view('pages.welcome');
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function getHelp() {
        return view('pages.help');
    }
}