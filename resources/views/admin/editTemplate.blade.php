@extends('main')
@section('title', 'Edit Template')
@section('content')

<form class="form-horizontal" action="{{url ('/admin/nomineeInfo/templateChanged') }}" method="POST">
{{ csrf_field() }}

<h4>Edit Message: </h4>

</br>

<textarea maxlength="500" rows='8' cols='80'class="form-control" id="editedMessage" name = "editedMessage">
<?php
$view = View::make('admin.emailMessage');
$contents =$view->render();
echo $contents;
?>
</textarea>


</br>
</br>
	<div class="form-group">
		<div class="col-sm-10">
			 <button type="submit" class="btn btn-primary">Save Changes</button>
		</div>
	</div>
</form>

@endsection