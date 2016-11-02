<?php
/**
 * Created by PhpStorm.
 * User: Shan
 * Date: 2016-10-18
 * Time: 9:44 PM
 */
namespace App\Http\Controllers;

// to access other stuff, use keyword 'use'
// ie. use Instance

class PageController extends Controller {
    // the logic of our pages will go here

    // we name our functions based on what is going on (get, pull, post, delete, etc
    public function getIndex() {

        # process variables data or parameters
        # talk to the model (SQL code is in model)
        # receive info from model
        # compile/process dat from model
        # pass data the correct view

        // $people = ['Brandon','Omer','Arsalan','Shan'];

        // return view('pages.welcome', ['people' => $people]);          # pass data the correct view
        return view('pages.welcome');
    }

    public function getAbout() {
        $first = 'Shan';
        $last = 'R';

        $full = $first . " " . $last;
        $email = 'shan.rajapakshe@gmail.com';

        $data['full'] = $full;
        $data['email'] = $email;

        # sets up the Fullname variable equal to $full which we can now pass on to view
        return view('pages.about')->withData($data);
    }

    public function getContact() {
        return view('pages.contact');
    }


}