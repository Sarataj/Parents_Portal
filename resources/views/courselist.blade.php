@extends('layouts.app')
@extends('navbar')
@extends('sidenavbar')
@section('content')


  <div class="container">
  <div class="col-md-3">
		</div>
		<div class="col-md-8">
      <table class="table table-bordered table-striped table-hover ">
    <thead>
    <tr>
      <th>ID</th>
      <th>Course Name</th>
      <th>Course ID</th>
      {{-- <th>Students Enrolled</th> --}}
      <th>Room Number</th>

      {{-- <th class="text-center">Action</th> --}}
    </tr>
    </thead>
    <tbody>
      @foreach ($courses  as $course)
      <tr>
        <td>{{ $course->id }}</td>
        <td>{{ $course->course_name }}</td>
        <td>{{ $course->course_id }}</td>
        {{-- <td>{{ $course->student_enrolled }}</td> --}}
        <td>{{ $course->room }}</td>

      </tr>
      @endforeach
    </tbody>
    </table>
    {{-- {{ $students->links() }} --}}
    </div>
</div>
@endsection
