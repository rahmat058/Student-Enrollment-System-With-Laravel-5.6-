<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllstudentsController extends Controller
{
  public function allStudents() {
    return view('admin.allstudent');
  }
}
