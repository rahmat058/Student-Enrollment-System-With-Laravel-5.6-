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
Route::get('/viewprofile', 'AdminController@viewProfile');
Route::get('/setting', 'AdminController@setting');

//Admin add student Routes
Route::get('/addstudent', 'AddstudentsController@addStudents');
Route::post('/savestudent', 'AddstudentsController@saveStudents');


//Admin all student Routes
Route::get('/allstudent', 'AllstudentsController@allStudents');
Route::get('/studentview/{student_id}', 'AllstudentsController@viewStudents');
Route::get('/studentdelete/{student_id}', 'AllstudentsController@deleteStudents');
Route::get('/studentedit/{student_id}', 'AllstudentsController@editStudents');
Route::post('/updatestudent/{student_id}', 'AllstudentsController@updateStudents');



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
Route::get('/addteacher', 'TeacherController@addTeacher');
