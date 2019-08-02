<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;

class CourseController extends Controller
{
  public function index()
  {
    return view ('home');
  }

  public function login()
  {
     $users = User::all();
     return view ('welcome',compact('users'));
  }

  public function create_course()
  {
     return view ('create_course');
  }

  public function store_course(Request $request)
  {

    $course = new Course;
    $course->course_name = $request->coursename;
    $course->course_id = $request->courseid;
    $course->student_enrolled = $request->studentenrolled;
    $course->room = $request->room;
    $course->save();
    return back();
  }

  public function courselist()
  {
    $courses= Course::all();
    return view ('courselist',compact('courses'));
  }

  public function edit_course()
  {
    $courses= Course::all();
    return view ('edit_course',compact('courses'));
  }


  public function edit2_course(Request $request,$id)
  {
      $course = Course::find($id);
      return view('edit2_course',compact('course'));
  }

  public function update_course(Request $request,$id)
  {

    $course = new Course;
    $course->course_name = $request->coursename;
    $course->course_id = $request->courseid;
    $course->student_enrolled = $request->studentenrolled;
    $course->room = $request->room;
    $course->save();
    return redirect(route('courselist'))->with('successMsg','course Successfully Updated');
  }

  public function delete_course($id)
  {
    Course::find($id)->delete_course();
    return redirect(route('courselist'))->with('successMsg','course Successfully Delete');
  }

}
