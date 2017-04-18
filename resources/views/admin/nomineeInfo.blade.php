@extends('main')
@section('title', 'Nominee Information')
@section('content')
@include('partials._adminNav')

<script type="text/javascript">
$(document).ready(function() {
    $('#myTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>


<div class="row">
    <div class="col-md-12">
        <h1>Nominee Information</h1>
  </div>
</div>
<br>



    <table id="myTable" class="table table-striped table-bordered" style="width:75%">
      <thead>
        <tr>
          <th>Student Number</th>
          <th>Student Name</th>
          <th>Email</th>
          <th>Email Sent</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
          <tr>
          @foreach ($nominees as $nominee)
            <td>{{$nominee->studentNumber}}</td>
            <td>{{$nominee->firstName}} {{$nominee->lastName}}</td>
            <td>{{$nominee->email}}</td>
            <td>
             @if ($nominee->emailSent === 1)
             <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
              @else
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            @endif
            </td>
            <td>
                <form class="form-horizontal" action="{{url ('/admin/nomineeInfo/'.$nominee->studentNumber.'/edit') }}" method="GET">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                  </div>
                </form>
              </td>
              <td>
                 <form class="form-horizontal" action="{{url ('/admin/nomineeInfo/destroy/'.$nominee->studentNumber)}}" method="POST">
                   <input type="hidden" name="_method" value="DELETE">
                   {{ csrf_field() }}
                   <div class="form-group">
                     <div class="col-sm-10">
                       <button type="submit" class="btn btn-danger" onclick="return confirmDelete()">Delete</button>
                     </div>
                   </div>
                 </form>
               </td>

          </tr>
          @endforeach

</tbody>

    </table>

    <div class= "col-sm-10" align="left">
The 'Send Emails' button will send emails to everyone in the nominee list who have not already had an email sent to them.
You must make sure your email content is ready because you cannot send 2 email messages to the nominees in this system.
</div>



{{--using a new view to send email--}}
<form class="form-horizontal" action="{{url ('/admin/nomineeInfo/emailTemplate') }}" method="GET">
	<div class="form-group">
		<div class="col-sm-10">
			 <button type="submit" class="btn btn-primary">Send Emails</button>
		</div>
	</div>
</form>
{{--        print PDF still needs  formated pdf as per unit 5 needs view found in PDF.certificate and still needs to loop to show all--}}
<form class="form-horizontal" action="{{url ('/admin/nomineeInfo/generatePDF') }}" method="GET">
	<div class="form-group">
		<div class="col-sm-10">
			 <button type="submit" class="btn btn-primary" disabled title="Disabled as it needs optimization" >Generate Certificates </button>
		</div>
	</div>
</form>
</div>

<script type="text/javascript">
function confirmDelete() {
  var result = confirm('Are you sure you want to delete this Nominee?')
  if (result) {
    return true;
  }
  else {
    return false;
  }
}
</script>

@endsection
