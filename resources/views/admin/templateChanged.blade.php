@extends('main')
@section('title', 'Template Changed')
@section('content')
<form class="form-horizontal" action="{{url ('/admin/nomineeInfo/emailTemplate') }}" method="get">

Template Successfully Changed!

	<div class="form-group">
		<div class="col-sm-10">
			 <button type="submit" class="btn btn-primary">Return to Email Template Page</button>
		</div>
	</div>

</form>

@endsection