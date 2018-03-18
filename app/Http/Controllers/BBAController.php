<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BBAController extends Controller
{
  public function bba(){
      return view('admin.bba');
  }
}
