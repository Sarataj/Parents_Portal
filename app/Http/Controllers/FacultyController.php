<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Faculty;

class FacultyController extends Controller
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

  public function create_faculty()
  {
     return view ('create_faculty');
  }

  public function store_faculty(Request $request)
  {

    $faculty = new Faculty;
    $faculty->faculty_name = $request->faculty_name;
    $faculty->faculty_code = $request->faculty_code;
    $faculty->faculty_course_1 = $request->faculty_course_1;
    $faculty->faculty_course_2 = $request->faculty_course_2;
    $faculty->faculty_course_3 = $request->faculty_course_3;
    $faculty->save();
    return back();
  }


/*
  public function up()
  {
      Schema::create('faculties', function (Blueprint $table) {
          $table->increments('id');
          $table->string('first_name');
          $table->string('last_name');
          $table->string('email');
          $table->string('phone');
          $table->timestamps();
      });
  }

  public function up()
  {
      Schema::create('faculties', function (Blueprint $table) {
          $table->increments('id');
          $table->string('faculty_name');
          $table->string('faculty_code');
          $table->string('faculty_course_1');
          $table->string('faculty_course_2');
          $table->string('faculty_course_3');
          $table->timestamps();
      });
  }
*/


  public function facultylist()
  {
    $faculties= Faculty::all();
    return view ('facultylist',compact('faculties'));
  }

  public function edit_faculty()
  {
    $faculties= Faculty::all();
    return view ('edit_faculty',compact('faculties'));
  }

  public function edit2_faculty(Request $request,$id)
  {
      $faculty = Faculty::find($id);
      return view('edit2_faculty',compact('faculty'));
  }

  public function update_faculty(Request $request,$id)
  {

   $faculty = Faculty::find($id);
   $faculty->faculty_name = $request->faculty_name;
   $faculty->faculty_code = $request->faculty_code;
   $faculty->faculty_course_1 = $request->faculty_course_1;
   $faculty->faculty_course_2 = $request->faculty_course_2;
   $faculty->faculty_course_3 = $request->faculty_course_3;
   $faculty->save();
   return redirect(route('facultylist'))->with('successMsg','faculty Successfully Update');
  }

  public function delete_faculty($id)
  {
    Faculty::find($id)->delete();//delete_faculty();
    return redirect(route('facultylist'))->with('successMsg','faculty Successfully Delete');
  }


}
