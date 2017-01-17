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
                
@endsection