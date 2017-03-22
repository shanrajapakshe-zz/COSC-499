@extends('main')
    @section('title', 'Unit 5 Award Nominations')

    @section('content')
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron">
                            <h1>Hi {{Auth::user()->firstName}}!</h1>
                            <br>
                            <p class="lead">Welcome to the Unit 5 Awards Nomination System. </p>
                            <br>
                            <p >Click below to create a new nomination</p>
                            <br>
                            <p><a class="btn btn-primary btn-lg" href="/nominations/create" role="button">Create Nomination</a></p>
                        </div>
                    </div>
                </div> <!-- end of row -->
                
@endsection