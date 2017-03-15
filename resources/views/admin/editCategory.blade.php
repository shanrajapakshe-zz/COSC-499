@extends('main')
@section('title', 'Edit Category Information')

@section('content')
<h3>Edit Award Category: {{$category->name}}</h3>

<form class="form-horizontal" action="{{url ('/admin/categories/'.$category->id.'/update') }}" method="POST">
  	<input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Enter New Name:</label>
      <div class="col-sm-4">
        <input type="textarea" class="form-control" id="name" placeholder={{$category->name}} required  name="name">
      </div>

      <div class="form-group">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Submit Changes</button>
      </div>
    </div>
  </form>

@endsection