<?php

namespace App\Http\Controllers;
use App\Nomination;
use App\Nominee;
use App\Award;
use App\Prof;
use App\Course;
use App\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class AdminController extends Controller {



  public function allAwardNominee($id) {

      $award = Award::find($id);
      $uniqueCourse=  DB::select("SELECT courseName, courseNumber from course where nomination_id
        IN (SELECT id from nomination where award_id in (SELECT id  from award where id = $id ))
        GROUP BY courseName ,courseNumber");
        $studentCourses = DB::select("SELECT * from course INNER JOIN nomination
ON nomination.id=course.nomination_id Where nomination_id  in (SELECT id from nomination where award_id = $id)");

      $studentForAward = DB::select("SELECT * from nominee Where studentNumber in (SELECT studentNumber
        from nomination where award_id = $id )");




      return view('admin.allAwardNominee')->with('studentCourses',$studentCourses)->with('uniqueCourse',$uniqueCourse)->with('award',$award)->with('studentForAward', $studentForAward);
  }




  public function awardReport(){

      $awards = Award::all();
      $nominations = Nomination::all();
      $unique_Years = DB::select('SELECT EXTRACT(YEAR FROM created_at) AS uniqueYears FROM nomination group by uniqueYears');
      $countNoms = DB::select('SELECT  count(id) AS countID ,award_id from nomination group by award_id');
      return view('admin.awardReport')->with('nominations', $nominations)->with('awards', $awards)->with('unique_Years' ,$unique_Years)->with('countNoms',$countNoms);
    }

    public function getReportByYear(Request $request){
      $awards = Award::all();
      $nominations = Nomination::all();
      $unique_Years = DB::select('SELECT EXTRACT(YEAR FROM created_at) AS uniqueYears FROM nomination group by uniqueYears  ');
      $countNoms = DB::select('SELECT EXTRACT(YEAR FROM created_at) AS uniqueYears, count(id) AS countID ,award_id from nomination group by award_id HAVING uniqueYears IN ');
      return view('admin.awardReport')->with('nominations', $nominations)->with('awards', $awards)->with('unique_Years' ,$unique_Years)->with('countNoms',$countNoms);
    }

    public function award() {
        $awards = Award::all();
        $categories = Category::all();
        return view('admin.award')->with('awards', $awards)->with('categories', $categories);
    }

    public function prof() {
        $profs = Prof::all();
        return view('admin.prof')->with('profs', $profs);
      }

    public function search() {
        return view('admin.search');
    }

	public function nominations() {
        $awards = Award::all();
        $courses = course::all();
        $nominations = Nomination::all();
        $unique_Years = DB::select('SELECT EXTRACT(YEAR FROM created_at) AS uniqueYears FROM nomination group by uniqueYears');

        return view('admin.nominations')->with('nominations', $nominations)->with('awards',$awards)->with('courses', $courses)->with('unique_Years',$unique_Years);
    }



/*--------------------------------------------------------------------------*/
/*--------------------The Error is still not fixed for EDIT-----------------*/

  /*  This is the NomineeInfo Tab*/
  public function nomineeInfo() {
        $nominees = Nominee::all();
        return view('admin.nomineeInfo')->with('nominees', $nominees);
    }

  public function editEmail($studentNumber) {

        // get the nominee info including the email
        $nominee = Nominee::find($studentNumber);

        // show edit form and pass on Email
        return view('admin.editEmail')->with('nominee', $nominee);
    }

  public function updateEmail(Request $request, $studentNumber) {
        $this->validate($request, [
            'email'=>'required',
            ]);
        $nominee = Nominee::find($studentNumber);
        $nominee->email = $request->email;
        $nominee->save();

        $nominees = nominee::all();
        return view('admin.nomineeInfo')->with('nominees', $nominees);
    }
  public function storeEmail(Request $request) {
        $this->validate($request, [
            'email'=>'required',
            ]);
        $nominee = new Nominee;
        $nominee->email = $request->email;
        $award -> save();

        $nominees = nominee::all();
        return view('admin.nomineeInfo')->with('nominees', $nominees);
    }
/*--------------------------------------------------------------------------*/
/*BRANDON STUFF*/

  public function emailTemplate(){
        $nominees = Nominee::all();
        return view('admin.emailTemplate');
    }

  public function sendEmail(){
        $nominees = Nominee::all(); 
        //loop through each nominee
        foreach ($nominees as $nominee) {
        //setting nominee variables 
        $name = $nominee->firstName." ".$nominee->lastName;
        $email = $nominee->email;
        $data=['email'=> '$email', 'name'=>'$name'];
        //sending mail
        Mail::send(['text'=>'admin.emailMessage'],$data,function($message) use ($email,$name){

            $message->to($email,$name)->subject('Formal Invitation to Unit 5 Award Ceremony');
        });

        }
        return view('admin.emailSent')->with('nominees', $nominees);
    }

/*----------------------*/


    public function storeAward(Request $request) {
        $this->validate($request, [
            // 'award'=>'required',
            'name'=>'required',
            'category'=>'required',
            ]);

        $award = new Award;
        $award->name = $request->name;

        // find the correct category ID from the supplied name
        $category = Category::where('name', $request->category)->first();
        $award->category_id = $category->id;
        $award -> save();

        $awards = Award::all();
        $categories = Category::all();
        return view('admin.award')->with('awards', $awards)->with('categories', $categories);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editAward($id) {
        // get the award
        $award = Award::find($id);
        $categories = Category::all();

        // show edit form and pass on award
        return view('admin.editAward')->with('award', $award)->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAward(Request $request, $id) {
        $this->validate($request, [
            // 'award'=>'required',
            'name'=>'required',
            'category'=>'required',
            ]);
        $award = Award::find($id);
        $award->name = $request->name;
        $award->category = $request->category;
        $award->save();

        // Session::flash('message', 'Successfully updated award!');
        // return redirect()->route('award.report');
        $awards = Award::all();
        $categories = Category::all();
        return view('admin.award')->with('awards', $awards)->with('categories', $categories);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAward($id) {
        $award = Award::find($id)->delete();

        $awards = Award::all();
        $categories = Category::all();

        return view('admin.award')->with('awards', $awards)->with('categories', $categories);
    }



    public function storeProf(Request $request) {
        $this->validate($request, [
            'firstName'=>'required',
            'lastName'=>'required',
            ]);
        $prof = new Prof;
        $prof->firstName = $request->firstName;
        $prof->lastName = $request->lastName;
        $prof->save();

        $profs = Prof::all();
        return view('admin.prof')->with('profs', $profs);
    }

    public function editProf($id) {
        // get the prof
        $prof = Prof::find($id);

        // show edit form and pass on prof
        return view('admin.editProf')->with('prof', $prof);
    }

    public function updateProf(Request $request, $id) {
        $this->validate($request, [
            'firstName'=>'required',
            'lastName'=>'required',
            ]);
        $prof = Prof::find($id);
        $prof->firstName = $request->firstName;
        $prof->lastName = $request->lastName;
        $prof->save();

        // Session::flash('message', 'Successfully updated award!');
        // return redirect()->route('award.report');
        $profs = Prof::all();
        return view('admin.prof')->with('profs', $profs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyProf($id) {
        $prof = Prof::find($id)->delete();

        $profs = Prof::all();
        return view('admin.prof')->with('profs', $profs);
    }

    public function Categories() {
        $categories = Category::all();
        return view('admin.categories')->with('categories', $categories);
    }

    public function editCategory($id) {
        // get the category
        $category = Category::find($id);

        // show edit form and pass on category
        return view('admin.editCategory')->with('category', $category);
    }

    public function updateCategory(Request $request, $id) {

      $this->validate($request, [
            'name'=>'required',
            ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        // Session::flash('message', 'Successfully updated award!');
        // return redirect()->route('award.report');
        $categories = Category::all();
        return view('admin.categories')->with('categories', $categories);
    }

    public function storeCategory(Request $request) {
      $this->validate($request, [
            'name'=>'required',
            ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();

        $categories = Category::all();
        return view('admin.categories')->with('categories', $categories);
    }

    public function destroyCategory() {
        $category = Category::find($id)->delete();
        $categories = Category::all();
        return view('admin.categories')->with('categories', $categories);
    }
}
