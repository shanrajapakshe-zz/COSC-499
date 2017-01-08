@extends('main')
@section('title', 'Admin Report')


@section('content')

<div role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#report" aria-controls="tab1" role="tab" data-toggle="tab">Report</a></li>
        <li role="presentation"><a href="#portal" aria-controls="tab2" role="tab" data-toggle="tab">Portal</a></li>
		<li role="presentation"><a href="#nominations" aria-controls="tab2" role="tab" data-toggle="tab">Nominations</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="report">
			<div class="row">
				<div class="col-md-12">
					<h1>Admin Report</h1>
					<p>Report Page should include:</p>
					<ul>
						<li>List of Awards with the number of nominations made</li>
						<li>Can have different views of it</li>
					</ul>
				</div>
			</div>
		</div>
        <div role="tabpanel" class="tab-pane" id="portal">
			<div class="row">
				<div class="col-md-12">
					<h1>Admin Portal</h1>
					<p>Portal Page should include:</p>
					<ul>
						<li>Search Box with Search Button</li>
						<li>Awards Report Download Buttton</li>
						<li>Columns --> Number - Award - ID# - Course - Year</li>
						<li>Fields with editable links</li>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="nominations">
			<div class="row">
				<div class="col-md-12">
					<h1>Nominations</h1>
					<p>Nominations Should include</p>
					<ul>
						<li>List of approved Nominations</li>
						<li>List of approved awards</li>
					</ul>
					<p> Nomination Report
				</div>
			</div>
		</div>
    </div>
</div>
@endsection