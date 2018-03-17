<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //loginDashboard start Here
    public function loginDashboard(Request $request) {
        return view('admin.dashboard');
    }
}
