@extends('layouts.app')
@extends('navbar')
@extends('sidenavbar')
@section('content')

  <div class="container">
		@if ($errors->any())
			@foreach ($errors->all() as $error)
				<div class="alert alert-dismissible alert-danger">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>Oh snap!</strong>{{ $error }}
				</div>
			@endforeach
		@endif
		<div class="col-md-3">
		</div>
		<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Add New Faculty</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="{{ route('store_faculty') }}" method="POST">
				{{ csrf_field() }}
			  <fieldset>

			  	<div class="form-group">
			      <label for="faculty_name" class="col-md-2 control-label">Faculty Name</label>

			      <div class="col-md-8">
			        <input type="text" class="form-control" name="faculty_name" placeholder="Faculty Name" required>
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="faculty_code" class="col-md-2 control-label">Faculty Code</label>

			      <div class="col-md-8">
			        <input type="text" class="form-control" name="faculty_code" placeholder="Faculty Code" required>
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="faculty_course_1" class="col-md-2 control-label">First Course</label>

			      <div class="col-md-8">
			        <input type="text" class="form-control" name="faculty_course_1" placeholder="First Course" required>
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="faculty_course_2" class="col-md-2 control-label">Second Course</label>

			      <div class="col-md-8">
			        <input type="text" class="form-control" name="faculty_course_2" placeholder="Second Course" required>
			      </div>
			    </div>
				<div class="form-group">
			      <label for="faculty_course_3" class="col-md-2 control-label">Third Course</label>

			      <div class="col-md-8">
			        <input type="text" class="form-control" name="faculty_course_3" placeholder="Third Course" required>
			      </div>
			    </div>

			    <div class="form-group">
			      <div class="col-md-8 col-md-offset-2">
			        <button type="button" class="btn btn-default">Cancel</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		 </div>
		</div>
		</div>
	</div>
@endsection
