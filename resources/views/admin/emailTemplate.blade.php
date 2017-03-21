@extends('main')
@section('title', 'Email Template')
@section('content')

<form class="form-horizontal" action="{{url ('/admin/nomineeInfo/emailSent') }}" method="POST">
{{ csrf_field() }}

<h4>Current Message: </h4>

</br>

<textarea disabled maxlength="500" rows='8' cols='80'class="form-control" id="eMessage" name = "eMessage">
<?php
$view = View::make('admin.emailMessage');
$contents =$view->render();
echo $contents;
?>

</textarea>

</br>
	<div class="form-group">
		<div class="col-sm-10">
			 <button type="submit" class="btn btn-primary">Send Emails</button>
		</div>
	</div>
</form>

<form class="form-horizontal" action="{{url ('/admin/nomineeInfo/editTemplate') }}" method="GET">
	<div class="form-group">
		<div class="col-sm-10">
			 <button type="submit" class="btn btn-primary">Edit Template Message</button>
		</div>
	</div>	
</form>

<form class="form-horizontal" action="{{url ('/admin/nomineeInfo') }}" method="GET">
	<div class="form-group">
		<div class="col-sm-10">
			 <button type="submit" class="btn btn-primary">Return to Nominees Page</button>
		</div>
	</div>	
</form>

@endsection
