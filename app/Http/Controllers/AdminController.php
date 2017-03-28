<?php

namespace App\Http\Controllers;
use App\Nomination;
use App\Nominee;
use App\Award;
use App\User;
use App\Course;
use App\Category;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;

ini_set('max_execution_time', 120);

class AdminController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

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
    if (Auth::user()->admin===1) {
      $awards = Award::all();
      $nominations = Nomination::all();
      $unique_Years = DB::select('SELECT EXTRACT(YEAR FROM created_at) AS uniqueYears FROM nomination group by uniqueYears');
      $countNoms = DB::select('SELECT  count(id) AS countID ,award_id from nomination group by award_id');
      return view('admin.awardReport')->with('nominations', $nominations)->with('awards', $awards)->with('unique_Years' ,$unique_Years)->with('countNoms',$countNoms);
      }
        else {
          return view('pages.noAccess');
        }
    }

    public function getReportByYear(Request $request){
      if (Auth::user()->admin===1) {
        $awards = Award::all();
        $nominations = Nomination::all();
        $unique_Years = DB::select('SELECT EXTRACT(YEAR FROM created_at) AS uniqueYears FROM nomination group by uniqueYears  ');
        $countNoms = DB::select('SELECT EXTRACT(YEAR FROM created_at) AS uniqueYears, count(id) AS countID ,award_id from nomination group by award_id HAVING uniqueYears IN ');
        return view('admin.awardReport')->with('nominations', $nominations)->with('awards', $awards)->with('unique_Years' ,$unique_Years)->with('countNoms',$countNoms);
      }
      else {
          return view('pages.noAccess');
        }
    }

    public function award() {
      if (Auth::user()->admin===1) {
        $awards = Award::all();
        $categories = Category::all();
        return view('admin.award')->with('awards', $awards)->with('categories', $categories);
      }
      else {
          return view('pages.noAccess');
      }
    }

    public function prof() {
      if (Auth::user()->admin===1) {
        $profs = User::all();
        return view('admin.prof')->with('profs', $profs);
      }
      else {
          return view('pages.noAccess');
      }
    }

    public function search() {
      if (Auth::user()->admin===1) {
        return view('admin.search');
      }
      else {
          return view('pages.noAccess');
      }
    }

	public function nominations() {

        if (Auth::user()->admin===1) {
          $awards = Award::all();
          $courses = course::all();
          $nominations = Nomination::all();
          $unique_Years = DB::select('SELECT EXTRACT(YEAR FROM created_at) AS uniqueYears FROM nomination group by uniqueYears');

          return view('admin.nominations')->with('nominations', $nominations)->with('awards',$awards)->with('courses', $courses)->with('unique_Years',$unique_Years);
        }
        else {
          return view('pages.noAccess');
        }
    }


/*--------------------------------------------------------------------------*/
/*--------------------The Error is still not fixed for EDIT-----------------*/

  /*  This is the NomineeInfo Tab*/
  public function nomineeInfo() {
    if (Auth::user()->admin===1) {
        $nominees = Nominee::all();
        return view('admin.nomineeInfo')->with('nominees', $nominees);
    }
    else {
          return view('pages.noAccess');
    }
  }

  public function editEmail($studentNumber) {

      if (Auth::user()->admin===1) {
        // get the nominee info including the email
        $nominee = Nominee::find($studentNumber);

        // show edit form and pass on Email
        return view('admin.editEmail')->with('nominee', $nominee);
      }
      else {
          return view('pages.noAccess');
      }
  }

  public function updateEmail(Request $request, $studentNumber) {
    if (Auth::user()->admin===1) {
        $this->validate($request, [
            'email'=>'required',
            ]);
        $nominee = Nominee::find($studentNumber);
        $nominee->email = $request->email;

        // reset this nominee's sentEmail field;
        $nominee->emailSent = 0;
        $nominee->save();

        $nominees = nominee::all();
        return view('admin.nomineeInfo')->with('nominees', $nominees);
        }
      else {
          return view('pages.noAccess');
      }
  }

  public function storeEmail(Request $request) {
    if (Auth::user()->admin===1) {
        $this->validate($request, [
            'email'=>'required',
            ]);
        $nominee = new Nominee;
        $nominee->email = $request->email;
        $award -> save();

        $nominees = nominee::all();
        return view('admin.nomineeInfo')->with('nominees', $nominees);
        }
      else {
          return view('pages.noAccess');
      }
    }
/*--------------------------------------------------------------------------*/
/*BRANDON STUFF*/

  public function emailTemplate(){
    if (Auth::user()->admin===1) {
        $nominees = Nominee::all();
        return view('admin.emailTemplate');
        }
      else {
          return view('pages.noAccess');
      }
    }

  public function sendEmail(){
    if (Auth::user()->admin===1) {
        $nominees = Nominee::all();

        /*Code fragments for ideas on possibly looping through nominees faster*/
        // $name = array();
        // $email = array();
        // array_push($name,$nominee->firstName." ".$nominee->lastName);
        // array_push($email,$nominee->email);

        //loop through each nominee & set their name and emails as variables

        foreach ($nominees as $nominee) {

          // only send emails to nominees with a valid email address format
          if (!filter_var($nominee->email, FILTER_VALIDATE_EMAIL)){
            continue;
          }
        
          // only send email to nominees who havent gotten an email yet
        if ($nominee->emailSent === 0){

         //change value of email Sent to 1(True);

          $nominee->emailSent = 1;
          $nominee->save();

          $name = $nominee->firstName." ".$nominee->lastName;
          $email = $nominee->email;
          $data=['email'=> '$email', 'name'=>'$name'];
        //sending email

        /*MESSAGES USING BLADE VIEW TEXT*/
          Mail::send(['text'=>'admin.emailMessage'],$data,function($message) use ($email,$name){
              $message->to($email,$name)
                      ->subject('Formal Invitation to Unit 5 Award Ceremony');
           });

        };

      }

        return view('admin.emailSent')->with('nominees', $nominees);
    }
          else {
          return view('pages.noAccess');
      }
  }


  public function editTemplate() {
        return view('admin.editTemplate');
    }

  public function changeTemplate(){
        //setting $_Post variable
        $a = $_POST['editedMessage'];
        //specifying where file is
        $path = resource_path('views\admin\emailMessage.blade.php');
        //emptying the file
        $f = fopen($path,'w+');
        //writing into file new content
        file_put_contents($path, $a);
        return view('admin.templateChanged');
  }

/*----------------------*/

    public function storeAward(Request $request) {
      if (Auth::user()->admin===1) {
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
      else {
          return view('pages.noAccess');
      }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editAward($id) {
      if (Auth::user()->admin===1) {
        // get the award
        $award = Award::find($id);
        $categories = Category::all();

        // show edit form and pass on award
        return view('admin.editAward')->with('award', $award)->with('categories', $categories);
        }
      else {
          return view('pages.noAccess');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAward(Request $request, $id) {
      if (Auth::user()->admin===1) {
        $this->validate($request, [
            // 'award'=>'required',
            'name'=>'required',
            'category'=>'required',
            ]);
        $award = Award::find($id);
        $award->name = $request->name;
        $category = Category::where('name', $request->category)->first();
        $award->category_id = $category->id;
        $award->save();

        // Session::flash('message', 'Successfully updated award!');
        // return redirect()->route('award.report');
        $awards = Award::all();
        $categories = Category::all();
        return view('admin.award')->with('awards', $awards)->with('categories', $categories);
        }
      else {
          return view('pages.noAccess');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAward($id) {
      if (Auth::user()->admin===1) {
        $award = Award::find($id)->delete();

        $awards = Award::all();
        $categories = Category::all();

        return view('admin.award')->with('awards', $awards)->with('categories', $categories);
        }
      else {
          return view('pages.noAccess');
      }
    }



    public function storeProf(Request $request) {
      if (Auth::user()->admin===1) {
        $this->validate($request, [
            'firstName'=>'required',
            'lastName'=>'required',
            ]);
        $prof = new User;
        $prof->firstName = $request->firstName;
        $prof->lastName = $request->lastName;
        if ($request->admin === 'on') {
          $prof->admin = 1;
        }
        else {
          $prof->admin = 0;
        }
        $prof->email = $request->email;
        $prof->save();

        $profs = User::all();
        return view('admin.prof')->with('profs', $profs);
        }
      else {
          return view('pages.noAccess');
      }
    }

    public function editProf($id) {
      if (Auth::user()->admin===1) {
        // get the prof
        $prof = User::find($id);

        // show edit form and pass on prof
        return view('admin.editProf')->with('prof', $prof);
        }
      else {
          return view('pages.noAccess');
      }
    }

    public function updateProf(Request $request, $id) {
      if (Auth::user()->admin===1) {
        $this->validate($request, [
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            ]);
        $prof = User::find($id);
        $prof->firstName = $request->firstName;
        $prof->lastName = $request->lastName;
        $prof->email = $request->email;
        $prof->save();

        // Session::flash('message', 'Successfully updated award!');
        // return redirect()->route('award.report');
        $profs = User::all();
        return view('admin.prof')->with('profs', $profs);
        }
      else {
          return view('pages.noAccess');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyProf($id) {
      if (Auth::user()->admin===1) {
        $prof = User::find($id)->delete();

        $profs = User::all();
        return view('admin.prof')->with('profs', $profs);
        }
      else {
          return view('pages.noAccess');
      }
    }

    public function Categories() {
      if (Auth::user()->admin===1) {
        $categories = Category::all();
        return view('admin.categories')->with('categories', $categories);
        }
      else {
          return view('pages.noAccess');
      }
    }

    public function editCategory($id) {
      if (Auth::user()->admin===1) {
        // get the category
        $category = Category::find($id);

        // show edit form and pass on category
        return view('admin.editCategory')->with('category', $category);
        }
      else {
          return view('pages.noAccess');
      }
    }

    public function updateCategory(Request $request, $id) {
      if (Auth::user()->admin===1) {

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
      else {
          return view('pages.noAccess');
      }
    }

    public function storeCategory(Request $request) {
      if (Auth::user()->admin===1) {
      $this->validate($request, [
            'name'=>'required',
            ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();

        $categories = Category::all();
        return view('admin.categories')->with('categories', $categories);
        }
      else {
          return view('pages.noAccess');
      }
    }

    public function destroyCategory() {
      if (Auth::user()->admin===1) {
        $category = Category::find($id)->delete();
        $categories = Category::all();
        return view('admin.categories')->with('categories', $categories);
        }
      else {
          return view('pages.noAccess');
      }
    }
}
