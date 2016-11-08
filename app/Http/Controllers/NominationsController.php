<?php

namespace App\Http\Controllers;

use App\Nomination;

use Illuminate\Http\Request;

use App\Http\Requests;

class NominationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nominations = Nomination::all();
        return view('nominations.index')->with('nominations', $nominations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nominations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'title' => 'required',
            // 'body'=>'required',
            ]);

        // the blog post is valid - Store in database
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $nomination
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nomination = Nomination::find($id);
        return view('nominations.show')->with('nomination', $nomination);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showForm($id)
    {
        return view('nominations.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
