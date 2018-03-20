<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AllstudentsController extends Controller
{
  public function allStudents() {
    $allstudent_info = DB::table('student_tbl')
                      -> get();

    $manage_student = view('admin.allstudent')
                      -> with ('allstudent_info', $allstudent_info);

    return view('layout')
                -> with('allstudent', $manage_student);
  }
}
