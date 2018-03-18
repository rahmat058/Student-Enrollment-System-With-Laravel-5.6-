<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSEController extends Controller
{
  public function cse(){
      return view('admin.cse');
  }
}
