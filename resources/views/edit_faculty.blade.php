@extends('layouts.app')
@extends('navbar')
@extends('sidenavbar')
@section('content')

  <div class="container">
  <div class="col-md-2">
		</div>
		<div class="col-md-10">
     <table class="table table-bordered table-striped table-hover ">
   <thead>
   <tr>
   <th>ID</th>
      <th>Faculty Name</th>
      <th>Faculty Code</th>
      <th>First Course</th>
      <th>Second Course</th>
      <th>Third Course</th>
     <th class="text-center">Action</th>
   </tr>
   </thead>
   <tbody>
     @foreach ($faculties as $faculty)
   	<tr>
     	<td>{{ $faculty->id }}</td>
     	<td>{{ $faculty->faculty_name }}</td>
     	<td>{{ $faculty->faculty_code }}</td>
     	<td>{{ $faculty->faculty_course_1 }}</td>	
      <td>{{ $faculty->faculty_course_2 }}</td>
      <td>{{ $faculty->faculty_course_3 }}</td>
     	<td class="text-center"><a class="btn btn-raised btn-primary btn-sm" href="{{ route('edit2_faculty',$faculty->id) }}">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a>
        
           <form method="POST" id="delete-form-{{ $faculty->id }}"
             action="{{ route('delete_faculty',$faculty->id) }}" style="display: none;">
             {{ csrf_field() }}
             {{ method_field('delete') }}
           </form>

             <button onclick="
             if(confirm('Are you Sure, You went to delete this?'))
              {
                event.preventDefault();
                document.getElementById('delete-form-{{ $faculty->id }}').submit();
              }
              else{
                event.preventDefault();
              }" 
             class="btn btn-raised btn-danger btn-sm">
             <i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
         </td>
   	</tr>
     @endforeach
   </tbody>
 </table>
 {{-- {{ $facultys->links() }} --}}
 </div>
 </div>
 @endsection


<!-- {{-- {{ $facultys->links() }} --}} -->