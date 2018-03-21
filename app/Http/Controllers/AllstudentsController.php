<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

Session_start();

class AllstudentsController extends Controller
{
  // Students Show Method Are Here
  public function allStudents() {
    $allstudent_info = DB::table('student_tbl')
                      -> get();

    $manage_student = view('admin.allstudent')
                      -> with ('allstudent_info', $allstudent_info);

    return view('layout')
                -> with('allstudent', $manage_student);
  }

  // Students Delete Method Are Here
  public function deleteStudents($student_id) {
    DB::table('student_tbl')
             -> where ('student_id', $student_id)
             -> delete();

       return Redirect::to('allstudent');
  }

  // Students Information View Method Are Here
  public function viewStudents() {
     return view('admin.studentview');
  }
}
