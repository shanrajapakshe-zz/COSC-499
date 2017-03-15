@extends('main')
@section('title', 'Award Categories')

@section('content')

@include('partials._adminNav')

<div class="row">
    <div class="col-md-12">
        <h1>Award Categories</h1>
	</div>
</div>

<table class="table table-striped table-bordered" style="width:75%">
    <tr>
        <th>Category Name</th>
        <th>Edit</th>
    </tr>

    <tr>
        @foreach ($categories as $category)
        <td>{{$category->name}}</td>
        <td>
            <form class="form-horizontal" action="{{url ('/admin/categories/'.$category->id.'/edit') }}" method="GET">
        	    {{ csrf_field() }}
                <div class="form-group">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </div>
            	</div>
            </form>
        </td>
	</tr>
    @endforeach
</table>

<h3>Add new Category</h3>
    <form class="form-horizontal" action="{{url ('/admin/categories/store') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Category Name*:</label>
          <div class="col-sm-4">
            <input type="textarea" class="form-control" id="firstName" placeholder="Enter Category Name" required  name="name">
          </div>
        </div>

        <div class="form-group">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>

@endsection