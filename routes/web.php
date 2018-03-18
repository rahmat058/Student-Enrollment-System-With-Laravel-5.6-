<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//logout Routes
Route::get('/logout', 'AdminController@logout');


Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});

//Admin Login Routes
Route::post('/adminlogin', 'AdminController@loginDashboard');
Route::get('/adminDashboard', 'AdminController@adminDashboard');

//Admin add student Routes
Route::get('/addstudent', 'AddstudentsController@addStudents');

//Admin all student Routes
Route::get('/allstudent', 'AllstudentsController@allStudents');

//Admin Tution Fees Routes
Route::get('/tutionfee', 'TutionController@tution');

//Admin Subject Routes
Route::get('/cse', 'CSEController@cse');
Route::get('/ece', 'ECEController@ece');
Route::get('/bba', 'BBAController@bba');
Route::get('/mba', 'MBAController@mba');
Route::get('/eee', 'EEEController@eee');

//Admin Result Routes
Route::get('/result', 'ResultController@result');

//Admin Teacher Routes
Route::get('/allteacher', 'TeacherController@teacher');
