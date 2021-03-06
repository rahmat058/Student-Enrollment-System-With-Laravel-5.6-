<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Redirect;
use Session;

Session_start();

class AdminController extends Controller
{

    //Logout Function Start here
    public function logout(){
        Session::put('admin_name', null);
        Session::put('admin_id', null);

        return Redirect::to('/backend');
    }

    public function student_logout() {
      Session::put('student_name', null);
      Session::put('student_id', null);

      return Redirect::to('/');
    }



    //loginDashboard For Admin start Here
    public function loginDashboard(Request $request) {

      $email    = $request-> admin_email;
      $password = md5($request-> admin_password);
      $result   = DB::table('admin_tbl')
                ->where('admin_email', $email)
                ->where('admin_password', $password)
                ->first();

      if($result) {

         Session::put('admin_email', $result->admin_email);
         Session::put('admin_id', $result->admin_id);
         return Redirect::to('/adminDashboard');

      }else {
         Session::put('exception', 'Email or Password is Invalid!!');
         return Redirect::to('/backend');

      }
    }

    public function adminDashboard() {
      return view('admin.dashboard');
    }

    //View Profile part here
    public function viewProfile(){
        return view('admin.view');
    }

    //Setting part here
    public function setting(){
        return view('admin.setting');
    }


    //loginDashboard For Student start Here
    public function studentLoginDashboard(Request $request) {

      $email    = $request-> student_email;
      $password = md5($request-> student_password);
      $result   = DB::table('student_tbl')
                ->where('student_email', $email)
                ->where('student_password', $password)
                ->first();

      if($result) {

         Session::put('student_email', $result->student_email);
         Session::put('student_id', $result->student_id);
         return Redirect::to('/studentDashboard');

      }else {
         Session::put('exception', 'Email or Password is Invalid!!');
         return Redirect::to('/');

      }
    }

    public function studentDashboard() {
      return view('student.dashboard');
    }

    //Student Setting Method are here
    public function studentSetting() {
      $student_id = Session::get('student_id');
      $allStudentsEditView = DB::table('student_tbl')
                                     -> select('*')
                                     -> where('student_id', $student_id)
                                     -> first();

        //  Debugging Code
        // echo "<pre>";
        // print_r($allStudentsEditView);

      $manageEditStudent = view('student.student_setting')
                      -> with('allStudentsEditView',$allStudentsEditView);

        return view('student_layout')
                        ->with('student_setting',$manageEditStudent);
    }
}
