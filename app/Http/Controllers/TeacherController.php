<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
  public function teacher(){
      return view('admin.teacher');
  }

  public function addTeacher() {
    return view('admin.addteacher');
  }
}
