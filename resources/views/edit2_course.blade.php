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
				{{-- <h3 class="panel-title">Add New course</h3> --}}
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="{{ route('update_course',$course->id) }}" method="POST">
					{{ csrf_field() }}
			  <fieldset>

			  	<div class="form-group">
			      <label for="coursename" class="col-md-2 control-label">CourseName</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $course->first_name }}" name="coursename" placeholder="CourseName">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="courseid" class="col-md-2 control-label">Course Id</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $course->last_name }}" name="courseid" placeholder="Course Id">
			      </div>
			    </div>

			    {{-- <div class="form-group">
			      <label for="inputstudentenrolled" class="col-md-2 control-label">studentenrolled</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $course->student_enrolled }}" name="studentenrolled" id="inputstudentenrolled" placeholder="Student Enrolled">
			      </div>
			    </div> --}}

			    <div class="form-group">
			      <label for="room" class="col-md-2 control-label">Room Number</label>

			      <div class="col-md-10">
			        <input type="text" class="form-control" value="{{ $course->room }}" name="room" placeholder="Room Number">
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
		</div>
	</div>
@endsection
