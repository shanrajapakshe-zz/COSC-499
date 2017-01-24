<?php

namespace App\Http\Controllers;

use App\Nomination;
use App\Award;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function report() {
        $awards = Award::all();
        return view('admin.report')->with('awards', $awards);
    }

    public function search() {
        return view('admin.search');
    }

	public function nominations() {
        $awards = Award::all();
        $nominations = Nomination::all();
        return view('admin.nominations')->with('nominations', $nominations)->with('awards',$awards);
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
        return view('admin.report')->with('awards', $awards);
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
        return view('admin.report')->with('awards', $awards);
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
        return view('admin.report')->with('awards', $awards);
    }
}
