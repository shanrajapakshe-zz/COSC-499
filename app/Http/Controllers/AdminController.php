<?php

namespace App\Http\Controllers;
use App\Nomination;
use App\Nominee;
use App\Award;
use App\User;
use App\Course;
use App\Category;
use App\EmailTemplate;
use Auth;
use PDF;
use Elibyy\TCPDF\Facades\TCPDF;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;

ini_set('max_execution_time', 240);

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

    public function destroyNominee($id) {
      if (Auth::user()->admin===1) {
        $nominee = Nominee::find($id)->delete();

        $nominees = Nominee::all();
        return view('admin.nomineeInfo')->with('nominees', $nominees);
        }
      else {
          return view('pages.noAccess');
      }

    }

/*--------------------------------------------------------------------------*/
/*PDF Related Functions*/
    public function generatePDF(){
      if (Auth::user()->admin===1) {
          $nominees = Nominee::all();

          $pdf = new TCPDF();
          $pdf::SetTitle('Certificates');
          foreach ($nominees as $nominee) {

            $name = $nominee->firstName." ".$nominee->lastName;
            $studentNumber = $nominee->studentNumber;

           $data = array( 'name' => $name, 'studentNumber' =>$studentNumber);

           $view = \View::make('PDF.certificate', $data);
           $html = $view->render();
           //define size and orentation of page
           $pdf::AddPage('L', 'A5'); //l for landscape and P for, you guessed it !
           $pdf::writeHTML($html, true, false, true, false, '');

        }

        $pdf::Output('Certificates.pdf');

      }
            else {
            return view('pages.noAccess');
        }
    }


/*--------------------------------------------------------------------------*/
/*Email Related Functions*/

  public function emailTemplate(){
    if (Auth::user()->admin===1) {
        $template = EmailTemplate::find(1);
        return view('admin.emailTemplate')->with('template', $template);
        }
      else {
          return view('pages.noAccess');
      }
    }



  public function sendEmail(){
    if (Auth::user()->admin===1) {
        $nominees = Nominee::all();
        //find message from database, pull only message from row
        $templateRow = EmailTemplate::find(1);
        $templateMessage = $templateRow['message'];

        //loop through each nominee & set their name and emails as variables
        foreach ($nominees as $nominee) {

          // only send emails to nominees with a valid email address format, skip to next nominee if not valid
          if (!filter_var($nominee->email, FILTER_VALIDATE_EMAIL)){
            continue;
          }

          // only send email to nominees who havent gotten an email yet
        if ($nominee->emailSent === 0){


          $name = $nominee->firstName." ".$nominee->lastName;
          $studentNumber = $nominee->studentNumber;
          $email = $nominee->email;

         $data = array( 'email' => $email, 'name' => $name, 'templateMessage' =>$templateMessage, 'studentNumber' =>$studentNumber);

         Mail::send( 'email.invite', $data, function( $message ) use ($data)
         {
         $message->to( $data['email'] )->subject( 'Formal Invitation to Unit 5 Award Ceremony!' );
         });

         //change value of email Sent to 1(True);
         $nominee->emailSent = 1;
         $nominee->save();


        };
      }

        return view('admin.emailSent')->with('nominees', $nominees);
    }
          else {
          return view('pages.noAccess');
      }
  }

  public function editTemplate() {
    if (Auth::user()->admin===1) {
        $template = EmailTemplate::find(1);
        return view('admin.editTemplate')->with('template', $template);
      }
    else {
        return view('pages.noAccess');
         }
    }

  public function updateTemplate(Request $request) {
    if (Auth::user()->admin===1) {

      $this->validate($request, [
          'message'=>'required',
          ]);
      $template = EmailTemplate::find(1);
      $template->message = $request->message;
      $template->save();
      return view('admin.templateChanged');
    }
    else {
        return view('pages.noAccess');
    }
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
        if ($request->admin === 'on') {
          $prof->admin = 1;
        }
        else {
          $prof->admin = 0;
        }
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
