@extends('main')
@section('title', 'Edit Template')
@section('content')

<form class="form-horizontal" action="{{url ('/admin/nomineeInfo/updateTemplate') }}" method="POST">
	<input type="hidden" name="_method" value="PUT">

	{{ csrf_field() }}

	<h4>Edit Message: </h4>
	</br>	

	<div class="form-group">
		<textarea maxlength="500" rows='8' cols='80'class="form-control" id="message" name = "message">{{$template->message}}</textarea>
	</div>

	</br>
		<div class="form-group">
			<div class="col-sm-10">
				 <button type="submit" class="btn btn-primary">Save Changes</button>
			</div>
		</div>
</form>

@endsection
