<?php

namespace App\Http\Controllers;

use App\Nomination;
use App\Course;
use App\Award;
use App\Prof;

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
        $profs = Prof::all();
        return view('nominations.index')->with('nominations', $nominations)->with('courses',$courses)->with('awards',$awards)->with('profs',$profs);
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
            // 'award'=>'required',
            'studentNumber'=>'required',
            'studentFirstName'=>'required',
            'studentLastName'=>'required',
            ]);

        $nomination = new Nomination;
        $award = new Award;
        
        // obtain the right award from the id
        $award = Award::where('name',$request->award)->get()->first();
        $nomination->award_id = $award->id;

        $nomination->studentNumber = $request->studentNumber;
        $nomination->studentFirstName = $request->studentFirstName;
        $nomination->studentLastName = $request->studentLastName;
        $nomination->description = $request->description;
        $nomination -> save();

        // saving each course
        $course0 = new Course;
        $course0->courseName0 = $request->courseName0;
        $course0->courseNumber0 = $request->courseNumber0;
        $course0->sectionNumber0 = $request->sectionNumber0;
        // $course->semester = $request->semester;
        
        // check if grade,estimatedGrade,estimatedRanke are blank
        if($request->finalGrade0 =='') {
            $request->finalGrade0 = null;
        }
        
        if($request->estimatedGrade0 =='') {
            $request->estimatedGrade0 = null;
        }
        
        if($request->estimatedRank0 =='') {
            $request->estimatedRank0 = null;
        }
        $course0->finalGrade0 = $request->finalGrade0;
        $course0->estimatedGrade0 = $request->estimatedGrade0;
        $course0->rank0 = $request->rank0;
        $course0->save();

        
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

    // private function addCourse($number, $request) {
    //     $course = new Course;
    //     $course->courseName0 = $request->courseName0;
    //     $course->courseNumber0 = $request->courseNumber0;
    //     $course->sectionNumber0 = $request->sectionNumber0;
    //     // $course->semester = $request->semester;
        
    //     // check if grade,estimatedGrade,estimatedRanke are blank
    //     if($request->finalGrade0 =='') {
    //         $request->finalGrade0 = null;
    //     }
        
    //     if($request->estimatedGrade0 =='') {
    //         $request->estimatedGrade0 = null;
    //     }
        
    //     if($request->estimatedRank0 =='') {
    //         $request->estimatedRank0 = null;
    //     }
        
    //     $course->finalGrade0 = $request->finalGrade0;
    //     $course->estimatedGrade0 = $request->estimatedGrade0;
    //     $course->rank0 = $request->rank0;
    //     $course ->save();
    // }
}