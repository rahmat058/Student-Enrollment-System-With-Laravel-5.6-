<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;

Session_start();

class AddstudentsController extends Controller
{
    public function addStudents() {
      return view('admin.addstudent');
    }

    //Student Save Method are Here
    public function saveStudents(Request $request) {
      $data = array();
      $data['student_name']           = $request->student_name;
      $data['student_roll']           = $request->student_roll;
      $data['student_fathername']     = $request->student_fathername;
      $data['student_mothername']     = $request->student_mothername;
      $data['student_email']          = $request->student_email;
      $data['student_phone']          = $request->student_phone;
      $data['student_address']        = $request->student_address;
      $data['student_password']       = md5($request->student_password);
      $data['student_addmissionyear'] = $request->student_addmissionyear;
      $data['student_department']     = $request->student_department;

      $image = $request->file('student_image');

      if($image) {
        $image_name = str_random(20);
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$ext;
        $upload_path = 'image/';
        $image_url = $upload_path.$image_full_name;
        $success = $image->move($upload_path, $image_full_name);
        if($success) {
          $data['student_image'] = $image_url;

          DB::table('student_tbl')-> insert($data);
          Session::put('exception', 'Student Added SuccessFully!!');
          return Redirect::to('/addstudent');
        }
      }

      $data['image'] = $image_url;
        DB::table('student_tbl')-> insert($data);
        Session::put('exception', 'Student Added SuccessFully!!');
        return Redirect::to('/addstudent');

        DB::table('student_tbl')-> insert($data);
        Session::put('exception', 'Student Added SuccessFully!!');
        return Redirect::to('/addstudent');
    }

    //Student Setting Method are Here
    public function studentProfile() {
      $student_id      = Session::get('student_id');
      $student_profile = DB::table('student_tbl')
                                     -> select('*')
                                     -> where('student_id', $student_id)
                                     -> first();

        //  Debugging Code
        // echo "<pre>";
        // print_r($student_profile);

      $manageStudentProfile = view('student.student_view')
                      -> with('student_profile',$student_profile);

      return view('student_layout')
                      ->with('student_view',$manageStudentProfile);
    }
}
