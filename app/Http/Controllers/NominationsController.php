<?php

namespace App\Http\Controllers;

use App\Nomination;
use App\Course;
use App\Award;

use Illuminate\Http\Request;

use App\Http\Requests;

class NominationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $nominations = Nomination::all();
        $courses = Course::all();
        $awards = Award::all();
        return view('nominations.index')->with('nominations', $nominations)->with('courses',$courses)->with('awards',$awards);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $awards = Award::all();
        return view('nominations.create')->with('awards',$awards);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'studentNumber'=>'required',
            'studentFirstName'=>'required',
            'studentLastName'=>'required',
            ]);

        $nomination = new Nomination;
        $nomination->studentNum = $request->studentNum;
        $nomination->studentFirstName = $request->studentFirstName;
        $nomination->studentLastName = $request->studentLastName;
        $nomination->gradDate = $request->gradDate;
        $nomination -> save();

        $course = new Course;
        // $course->courseName = $request->awardName;
        $course->section = $request->section;
        $course->semester = $request->semester;
        $course->actGrade = $request->actGrade;
        $course->estGrade = $request->estGrade;
        $course -> estRank = $request -> estRank;
        $course->description = $request->description;
        $course ->save();
        // the blog post is valid - Store in database

        $nominations = Nomination::all();
        $courses = Course::all();
        return view('nominations.index')->with('nominations', $nominations)->with('courses',$courses);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $nomination
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $nomination = Nomination::find($id);
        return view('nominations.show')->with('nomination', $nomination);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showForm($id) {
        return view('nominations.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}