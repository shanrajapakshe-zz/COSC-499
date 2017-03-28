<?php

namespace App\Http\Controllers;
use App\Nomination;

use App\Nominee;
use App\Course;
use App\Award;
use App\User;
use App\Category;
use Auth;

use Illuminate\Http\Request;

use App\Http\Requests;

class NominationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    private function generateCourse($id, $request) {
        $course = new Course;

        $cName = 'courseName'.$id;
        $course->courseName = $request->$cName;

        $cNumber = 'courseNumber'.$id;
        $course->courseNumber = $request->$cNumber;

        $sNumber = 'sectionNumber'.$id;
        $course->sectionNumber = $request->$sNumber;

        // check if grade,estimatedGrade,estimatedRank are blank
        $fGrade = 'finalGrade'.$id;
        if($request->$fGrade =='') {
            $request->$fGrade = null;
        }

        $eGrade = 'estimatedGrade'.$id;
        if($request->$eGrade =='') {
            $request->$eGrade = null;
        }

        $rank = 'rank'.$id;
        if($request->$rank =='') {
            $request->$rank = null;
        }

        $course->finalGrade = $request->$fGrade;
        $course->estimatedGrade = $request->$eGrade;
        $course->rank = $request->$rank;
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
        $profs = User::all();
        $categories = Category::all();

        $nominees = Nominee::all();
        return view('nominations.index')->with('nominees', $nominees)->with('nominations', $nominations)->with('courses',$courses)->with('awards',$awards)->with('profs',$profs)->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $awards = Award::all();
        $categories = Category::all();

        return view('nominations.create')->with('awards',$awards)->with('categories',$categories);
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



        if (isset($request->checkForDis)) {// checks if the checkbox is checked and creates a nom for Distinguished
          $nomination = new Nomination;
          $award = new Award;
          $award_name = 'Graduating Student';
          $category = 5;

          $award = Award::where('category_id',$category);
          $award = $award->where('name', $award_name)->get()->first();

          $nomination->award_id = 16;
          $nomination->studentNumber = $request->studentNumber;
          $nomination->user_id = Auth::user()->id;
          $nomination->description = $request->disGradNomDis;
          $nomination->save();

          // Check if nominee is already in database
          $nominee = Nominee::where('studentNumber',$request->studentNumber)->get()->first();

          if ($nominee =="") {
              $nominee = new Nominee;
              $nominee->studentNumber = $request->studentNumber;
              $nominee->firstName = $request->studentFirstName;
              $nominee->lastName = $request->studentLastName;
              $nominee->save();
          }

          // saving each course
          for ($i = 0; $i <=5; $i++) {
              $courseName = 'courseName'.$i;
              // check if courseName 'i' exists
              if ($request->$courseName != '' && $request->$courseName != null) {
                  $course = new Course;
                  $course = NominationController::generateCourse($i, $request);
                  $nomination->course()->save($course);
              }
          }
      }
        $nomination = new Nomination;
        $award = new Award;
        // obtain the right award from the id
        $full_award = $request->award;
        $award_name = "";
        $category = "";

        if (strpos($full_award,"Physics")) {
            $award_name = substr($full_award, 0, -8);
            $category = 1;
        }
        elseif (strpos($full_award,"Mathematics")) {
            $award_name = substr($full_award, 0, -12);
            $category = 2;
        }
        elseif (strpos($full_award,"Computer Science")) {
            $award_name = substr($full_award, 0, -17);
            $category = 3;
        }
        elseif (strpos($full_award,"Statistics/Data Science")) {
            $award_name = substr($full_award, 0, -24);
            $category = 4;
        }
        elseif (strpos($full_award,"Distinguished")) {
            $award_name = substr($full_award, 0, -14);
            $category = 5;
        }
        else {
            $award_name = $full_award;
            $category = 6;
        }
        $award = Award::where('category_id',$category);
        $award = $award->where('name', $award_name)->get()->first();

        $nomination->award_id = $award->id;
        $nomination->studentNumber = $request->studentNumber;
        $nomination->user_id = Auth::user()->id;
        if (isset($request->checkForDis)) {
        $nomination->description = $request->disGradNomDis;}
        else {$nomination->description = $request->description;  }
        $nomination->save();

        // Check if nominee is already in database
        $nominee = Nominee::where('studentNumber',$request->studentNumber)->get()->first();

        if ($nominee =="") {
            $nominee = new Nominee;
            $nominee->studentNumber = $request->studentNumber;
            $nominee->firstName = $request->studentFirstName;
            $nominee->lastName = $request->studentLastName;
            $nominee->save();
        }

        // saving each course
        for ($i = 0; $i <=5; $i++) {
            $courseName = 'courseName'.$i;
            // check if courseName 'i' exists
            if ($request->$courseName != '' && $request->$courseName != null) {
                $course = new Course;
                $course = NominationController::generateCourse($i, $request);
                $nomination->course()->save($course);
            }
        }

        // return all nominations
        $nominations = Nomination::all();
        $courses = Course::all();
        $nominees = Nominee::all();
        $categories = Category::all();

        return view('nominations.index')->with('nominees', $nominees)->with('nominations', $nominations)->with('courses',$courses)->with('categories',$categories);
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
        $nomination = Nomination::find($id);
        $awards = Award::all();
        $categories = Category::all();

        return view('nominations.edit')->with('nomination', $nomination)->with('awards', $awards)->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $nomination = Nomination::find($id);

        $award = new Award;
        $award = Award::where('name',$request->award)->get()->first();
        $nomination->award_id = $award->id;

        $nomination->studentNumber = $request->studentNumber;

        // find the nominee, if they exist, and edit them
        $nominee = Nominee::where('studentNumber',$request->studentNumber)->get()->first();
        if ($nominee =="") {
            $nominee = new Nominee;
            $nominee->studentNumber = $request->studentNumber;
        }

        $nominee->firstName = $request->studentFirstName;
        $nominee->lastName = $request->studentLastName;
        $nominee->save();

        $nomination->description = $request->description;
        $nomination->user_id = Auth::user()->id;
        $nomination->save();

        // saving each course
        $courses = $nomination->course;
        echo $request;
        // for ($i = 0; $i <=count($courses)-1; $i++) {
        //     echo $courses[$i];
        // }

        for ($i = 0; $i <=5; $i++) {
            $courseName = 'courseName'.$i;
            // check if courseName 'i' exists
            if ($request->$courseName != '' && $request->$courseName != null) {
                $course = new Course;
                $course = NominationController::generateCourse($i, $request);
                $nomination->course()->save($course);
            }
        }

        $nominations = Nomination::all();
        $courses = Course::all();
        $awards = Award::all();
        $profs = User::all();
        $categories = Category::all();

        return view('nominations.index')->with('nominations', $nominations)->with('courses',$courses)->with('awards',$awards)->with('profs',$profs)->with('categories',$categories);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $nomination = Nomination::find($id)->delete();

        $nominations = Nomination::all();
        $courses = Course::all();
        return view('nominations.index')->with('nominations', $nominations)->with('courses',$courses);
    }
}
