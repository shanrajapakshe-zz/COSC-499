@extends('main')
@section('title', 'Email Template')
@section('content')
<form class="form-horizontal" action="{{url ('/admin/nomineeInfo') }}" method="get">

Emails Successfully sent!

	<div class="form-group">
		<div class="col-sm-10">
			 <button type="submit" class="btn btn-primary">Return to Nominees Page</button>
		</div>
	</div>

</form>

@endsection