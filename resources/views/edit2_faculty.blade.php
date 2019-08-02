@extends('layouts.app')
@extends('navbar')
@extends('sidenavbar')

@section('content')
	<div class="container">

	<div class="col-md-3">
		</div>
		<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading">
				{{-- <h3 class="panel-title">Add New faculty</h3> --}}
			</div>

			faculty_name,faculty_code,faculty_course_1,faculty_course_2,faculty_course_3

			<div class="panel-body">
				<form class="form-horizontal" action="{{ route('update_faculty',$faculty->id) }}" method="POST">
					{{ csrf_field() }}
			  <fieldset>

			  	<div class="form-group">
			      <label for="faculty_name" class="col-md-2 control-label">Faculty Name</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $faculty->faculty_name }}" name="faculty_name" placeholder="Faculty Name">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="faculty_code" class="col-md-2 control-label">Faculty Code</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $faculty->faculty_code }}" name="faculty_code" placeholder="Faculty Code">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="faculty_course_1" class="col-md-2 control-label">First Course</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $faculty->faculty_course_1 }}" name="faculty_course_1" placeholder="First Course">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="faculty_course_2" class="col-md-2 control-label">Second Course</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $faculty->faculty_course_2 }}" name="faculty_course_2" placeholder="Second Course">
			      </div>
			    </div>

				<div class="form-group">
			      <label for="faculty_course_3" class="col-md-2 control-label">Third Course</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $faculty->faculty_course_3 }}" name="faculty_course_3" placeholder="Third Course">
			      </div>
			    </div>

			    <div class="form-group">
			      <div class="col-md-10 col-md-offset-2">
			        <button type="button" class="btn btn-default">Cancel</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			      </div>
			    </div>
			  </fieldset>
			</form>
		 </div>
		</div>
		<div>
	</div>
@endsection
