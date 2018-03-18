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
}
