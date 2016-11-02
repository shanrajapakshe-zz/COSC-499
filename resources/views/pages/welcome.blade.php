@extends('main')
    @section('title', 'Unit 5 Award Nominations')

    @section('content')
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron">
                            <h1>Welcome to the Unit 5 Award System!</h1>
                            <p class="lead">Click below to start a new nomination</p>
                            <p><a class="btn btn-primary btn-lg" href="/nominations/create" role="button">Add Nomination</a></p>
                        </div>
                    </div>
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="post">
                            <h3>Nomination</h3>
                            <p>Info about the nominee.</p>
                            <p><a class="btn btn-primary btn-md" href="#" role="button">Edit</a></p>
                        </div>

                        <hr>

                        <div class="post">
                            <h3>Nomination</h3>
                            <p>Info about the nominee.</p>
                            <p><a class="btn btn-primary btn-md" href="#" role="button">Edit</a></p>
                        </div>

                        <hr>

                        
                    </div>

                    <div class="col-md-3 col-md-offset-1">
                        <h2>Deadline</h2>
                        All nominations should be posted by December 20 2016.
                    </div>
                </div>
    @endsection