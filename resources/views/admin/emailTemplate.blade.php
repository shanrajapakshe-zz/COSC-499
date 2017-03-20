@extends('main')
@section('title', 'Email Template')
@section('content')

<form class="form-horizontal" action="{{url ('/admin/nomineeInfo/emailSent') }}" method="get">


<!-- <a> Dear Student </a>
 --><textarea maxlength="500" rows='10' cols='80'class="form-control" id="emailMessage" name = "emailMessage">
Dear Student, 

	You have been nominated for a Unit 5 Award. We are holding a reception to celebrate your achievements. Please attend at (place + time).

Sincerely, 
	Unit 5 Award Committee
</textarea>

<!-- <a2> Sincerely, 
		Unit 5 Award Committee
		</a2> -->
	<div class="form-group">
		<div class="col-sm-10">
			 <button type="submit" class="btn btn-primary">Send Emails</button>
		</div>
	</div>
</form>




@endsection
