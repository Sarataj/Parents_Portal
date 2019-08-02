@extends('layouts.app')
@extends('navbar')
@extends('sidenavbar')
@section('content')

  <div class="container">
  <div class="col-md-3">
		</div>
		<div class="col-md-9">
`      <table class="table table-bordered table-striped table-hover ">
    <thead>
    <tr>
      <th>ID</th>
      <th>Faculty Name</th>
      <th>Faculty Code</th>
      <th>First Course</th>
      <th>Second Course</th>
      <th>Third Course</th>
      {{-- <th class="text-center">Action</th> --}}
    </tr>
    </thead>
    <tbody>
      @foreach ($faculties  as $faculty)
      <tr>
        <td>{{ $faculty->id }}</td>
        <td>{{ $faculty->faculty_name }}</td>
        <td>{{ $faculty->faculty_code }}</td>
        <td>{{ $faculty->faculty_course_1 }}</td>
        <td>{{ $faculty->faculty_course_2 }}</td>
        <td>{{ $faculty->faculty_course_3 }}</td>

      </tr>
      @endforeach
    </tbody>
    </table>
    {{-- {{ $students->links() }} --}}
    </div>
    </div>

@endsection
