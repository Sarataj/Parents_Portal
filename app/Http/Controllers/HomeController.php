<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\User;
use App\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function login()
    {
       $users = User::all();
       return view ('welcome',compact('users'));
    }


    public function create()
    {
      return view ('create');
    }


    public function store(Request $request)
    {
     $this->validate($request,[
       'firstname' => 'required',
       'lastname' => 'required',
       'email' => 'required',
       'phone' => 'required'
     ]);
     $student = new Student;
     $student->first_name = $request->firstname;
     $student->last_name = $request->lastname;
     $student->email = $request->email;
     $student->phone = $request->phone;
     $student->save();
     return back();
    }

    public function store_faculty(Request $request)
    {
     $this->validate($request,[
       'faculty_name' => 'required',
       'faculty_code' => 'required',
       'faculty_course_1' => 'required',
       'faculty_course_2' => 'required',
       'faculty_course_3' => 'required'
     ]);
     $faculty = new Faculty;
     $faculty->faculty_name = $request->faculty_name;
     $faculty->faculty_code = $request->faculty_code;
     $faculty->faculty_course_1 = $request->faculty_course_1;
     $faculty->faculty_course_2 = $request->faculty_course_2;
     $faculty->faculty_course_3 = $request->faculty_course_3;
     $faculty->save();
     return back();
    }

    public function store_course(Request $request)
    {
     $this->validate($request,[
       'coursename' => 'required',
       'courseid' => 'required',
       'studentenrolled' => 'required',
       'room' => 'required'
     ]);
     $faculty = new Course;
     $course->course_name = $request->coursename;
     $course->course_id = $request->courseid;
     $course->student_enrolled = $request->studentenrolled;
     $course->room = $request->room;
     $course->save();
     return back();
    }

  }
