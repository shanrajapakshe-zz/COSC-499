<?php

namespace App\Http\Controllers;

// to access other stuff, use keyword 'use'
// ie. use Instance

class PageController extends Controller {
    // the logic of our pages will go here

    // we name our functions based on what is going on (get, pull, post, delete, etc)
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