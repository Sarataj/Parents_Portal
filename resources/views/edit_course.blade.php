@extends('layouts.app')
@extends('navbar')
@extends('sidenavbar')
@section('content')

  <div class="container">
  <div class="col-md-3">
		</div>
		<div class="col-md-9">
     <table class="table table-bordered table-striped table-hover ">
   <thead>
   <tr>
     <th>ID</th>
     <th>Course Name</th>
     <th>Course ID</th>
     {{-- <th>Students Enrolled</th> --}}
     <th>Room Number</th>
     <th class="text-center">Action</th>
   </tr>
   </thead>
   <tbody>
     @foreach ($courses as $course)
   	<tr>
     	<td>{{ $course->id }}</td>
     	<td>{{ $course->course_name }}</td>
     	<td>{{ $course->course_id }}</td>
     	{{-- <td>{{ $course->student_enrolled }}</td> --}}
       <td>{{ $course->room }}</td>
     	<td class="text-center"><a class="btn btn-raised btn-primary btn-sm" href="{{ route('edit2_course',$course->id) }}">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
           <form method="POST" id="delete-form-{{ $course->id }}"
             action="{{ route('delete',$course->id) }}" style="display: none;">
             {{ csrf_field() }}
             {{ method_field('delete') }}

           </form>

             <button onclick="if(confirm('Are you Sure, You went to delete this?')){
               event.preventDefault();
               document.getElementById('delete-form-{{ $course->id }}').submit();
             }else{
               event.preventDefault();
             }" class="btn btn-raised btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
         </td>
   	</tr>
     @endforeach
   </tbody>
 </table>
 {{-- {{ $courses->links() }} --}}
 </div>
 </div>
 @endsection
