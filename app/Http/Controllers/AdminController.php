<?php

namespace App\Http\Controllers;

use App\Nomination;
use App\Award;
use App\Prof;
use App\Course;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {



    public function award() {
        $awards = Award::all();
        return view('admin.award')->with('awards', $awards);
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
        return view('admin.nominations')->with('nominations', $nominations)->with('awards',$awards)->with('courses', $courses);
    }

    public function storeAward(Request $request) {
        $this->validate($request, [
            // 'award'=>'required',
            'name'=>'required',
            'category'=>'required',
            ]);
        $award = new Award;
        $award->name = $request->name;
        $award->category = $request->category;
        $award -> save();

        $awards = Award::all();
        return view('admin.award')->with('awards', $awards);
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

        // show edit form and pass on award
        return view('admin.editAward')->with('award', $award);
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
        return view('admin.award')->with('awards', $awards);
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
        return view('admin.award')->with('awards', $awards);
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
}
