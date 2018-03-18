<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ECEController extends Controller
{
  public function ece(){
      return view('admin.ece');
  }
}
