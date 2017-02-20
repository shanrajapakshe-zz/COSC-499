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
    private function generateCourse($id, $request) {
        $course = new Course;

        $courseName = $request->courseName;
        $$courseName = 'courseName'.$id;
        $course->courseName = $request->$$courseName;

        $courseNumber = $request->courseNumber;
        $$courseNumber = 'courseNumber'.$id;
        $course->courseNumber = $request->$$courseNumber;

        $sectionNumber = $request->sectionNumber;
        $$sectionNumber = 'courseNumber'.$id;
        $course->sectionNumber = $request->$$sectionNumber;

        // check if grade,estimatedGrade,estimatedRank are blank
        $finalGrade = $request->finalGrade;
        $$finalGrade = 'finalGrade'.$id;
        if($request->$$finalGrade =='') {
            $request->$$finalGrade = null;
        }

        $estimatedGrade = $request->estimatedGrade;
        $$estimatedGrade = 'estimatedGrade'.$id;
        if($request->$$estimatedGrade =='') {
            $request->$$estimatedGrade = null;
        }

        $rank = $request->rank;
        $$rank = 'rank'.$id;
        if($request->$$rank =='') {
            $request->$$rank = null;
        }

        $course->finalGrade = $request->$$finalGrade;
        $course->estimatedGrade = $request->$$estimatedGrade;
        $course->rank = $request->$$rank;
        // $course->nomination_id = $request->
        return $course;
    }
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
        $nomination->save();

        // saving each course
        for ($i = 0; $i <=5; $i++) {
            if ($request->studentNumber.$i != '' && $request->studentNumber.$i != null) {
                $course = new Course;
                $course = NominationController::generateCourse($i, $request);
                $nomination->course()->save($course);
            }   
        }

        // return all nominations
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
