@extends('main')
@section('title', 'Email Template')
@section('content')

<form class="form-horizontal" action="{{url ('/admin/nomineeInfo/emailSent') }}" method="get">


<textarea maxlength="500" rows='10' cols='80'class="form-control" id="emailMessage" name = "emailMessage">

<?php
$view = View::make('admin.emailMessage');
$contents =$view->render();
echo $contents;
?>

</textarea>


	<div class="form-group">
		<div class="col-sm-10">
			 <button type="submit" class="btn btn-primary">Send Emails</button>
		</div>
	</div>
</form>




@endsection
