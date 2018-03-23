<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;

Session_start();

class TeacherController extends Controller
{
  //All Teacher Show Method Are Here
  public function allTeacher(){
    $allteacher_info = DB::table('teachers_tbl')
                      -> get();

    $manage_teacher = view('admin.allteacher')
                      -> with ('allteacher_info', $allteacher_info);

    return view('layout')
                -> with('allteacher', $manage_teacher);
  }

  //Add Teacher Function Are Here
  public function addTeacher() {
    return view('admin.addteacher');
  }

  //Save Teacher Function Are Here
  public function saveTeacher(Request $request) {
    $data = array();
    $data['teachers_name']           = $request->teachers_name;
    $data['teachers_phone']          = $request->teachers_phone;
    $data['teachers_address']        = $request->teachers_address;
    $data['teachers_department']     = $request->teachers_department;

    $image = $request->file('teachers_imagestring');

    if($image) {
      $image_name = str_random(20);
      $ext = strtolower($image->getClientOriginalExtension());
      $image_full_name = $image_name.'.'.$ext;
      $upload_path = 'image/';
      $image_url = $upload_path.$image_full_name;
      $success = $image->move($upload_path, $image_full_name);
      if($success) {
        $data['teachers_imagestring'] = $image_url;

        DB::table('teachers_tbl')-> insert($data);
        Session::put('exception', 'Teacher Added SuccessFully!!');
        return Redirect::to('/addteacher');
      }
    }

    $data['image'] = $image_url;
      DB::table('teachers_tbl')-> insert($data);
      Session::put('exception', 'Teacher Added SuccessFully!!');
      return Redirect::to('/addteacher');

      DB::table('teachers_tbl')-> insert($data);
      Session::put('exception', 'Teacher Added SuccessFully!!');
      return Redirect::to('/addteacher');
  }

  //Delete Teacher Method Are Here
  public function deleteTeacher($teachers_id) {
    DB::table('teachers_tbl')
             -> where ('teachers_id', $teachers_id)
             -> delete();

       return Redirect::to('allteacher');
  }
}
