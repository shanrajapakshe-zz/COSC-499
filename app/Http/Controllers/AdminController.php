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
    public function destroyAward($id) {
        $awards = Nomination::find($id);

        // delete the award that has been returned
    }
}
