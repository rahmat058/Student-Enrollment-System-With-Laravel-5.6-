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
  public function viewStudents($student_id) {
    $allStudentsDescriptionView = DB::table('student_tbl')
                                   -> select('*')
                                   -> where('student_id', $student_id)
                                   -> first();

      //  Debugging Code
      // echo "<pre>";
      // print_r($allStudentsDescriptionView);

    $manageDescriptionStudent = view('admin.studentview')
                    -> with('allStudentsDescriptionView',$allStudentsDescriptionView);

    return view('layout')
                    ->with('studentview',$manageDescriptionStudent);
  }

  //Students Edit Method Are Here
  public function editStudents($student_id){
    $allStudentsEditView = DB::table('student_tbl')
                                   -> select('*')
                                   -> where('student_id', $student_id)
                                   -> first();

      //  Debugging Code
      // echo "<pre>";
      // print_r($allStudentsEditView);

    $manageEditStudent = view('admin.studentedit')
                    -> with('allStudentsEditView',$allStudentsEditView);

      return view('layout')
                      ->with('studentedit',$manageEditStudent);

  }

  //Students Update Method Are Here
  public function updateStudents(Request $request, $student_id) {
     $data= array();
     $data['student_name']           = $request->student_name;
     $data['student_roll']           = $request->student_roll;
     $data['student_fathername']     = $request->student_fathername;
     $data['student_mothername']     = $request->student_mothername;
     $data['student_email']          = $request->student_email;
     $data['student_phone']          = $request->student_phone;
     $data['student_address']        = $request->student_address;
     $data['student_password']       = $request->student_password;
     $data['student_addmissionyear'] = $request->student_addmissionyear;


     DB::table('student_tbl')
           -> where('student_id', $student_id)
           -> update($data);

    Session::put('message', "Student Update Successfully!!");
    return Redirect::to('/allstudent');
  }


  //Students Update Profile Method Are Here
  public function studentOwnUpdate(Request $request) {
     $student_id = Session::get('student_id');
     $data= array();
     $data['student_phone']          = $request->student_phone;
     $data['student_address']        = $request->student_address;
     $data['student_password']       = $request->student_password;

     DB::table('student_tbl')
           -> where('student_id', $student_id)
           -> update($data);

    Session::put('message', "Student Update Successfully!!");
    return Redirect::to('/student_setting');
  }
}
