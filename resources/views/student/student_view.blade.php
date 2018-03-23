@extends('student_layout')

@php
    function convert_department($value) {
           $values = [
                1=>'CSE',
                2=>'ECE',
                3=>'BBA',
                4=>'EEE',
                5=>'MBA'
           ];

           return $values[$value];
    }
@endphp

@section('content')

  <div class="row user-profile">
    <div class="col-lg-12 side-left">
      <div class="card mb-6">
        <div class="card-body avatar">
          <h2 class="card-title">Info</h2>
          <img src="{{URL::to($student_profile->student_image)}}" alt="">
          <p class="name">{{$student_profile->student_name}}</p>
          <p class="designation">    -{{convert_department($student_profile->student_department)}}-
          </p>
          <a class="email" href="#">{{$student_profile->student_email}}</a>
          <a class="number" href="#">{{$student_profile->student_phone}}</a>
        </div>
      </div>
      <div class="card mb-6">
        <div class="card-body overview">
          <ul class="achivements">
            <h2 style="color:maroon; font-family:cursive; font-weight:bolder">Student Profile</h2>
          </ul>
          <div class="wrapper about-user">
            <h2 class="card-title mt-4 mb-3">About</h2>
            <p>The Total Information Of This Students Are Given Below</p>
          </div>
          <div class="info-links">
            <a class="website">
              <i class="icon-globe icon" style="font-family: verdana; font-size: 17px;">Father Name: </i>
              <span style="font-family: verdana; font-size: 15px;">
                {{$student_profile->student_fathername}}
              </span>
            </a>
            <a class="website">
              <i class="icon-globe icon" style="font-family: verdana; font-size: 17px;">Mother Name: </i>
              <span style="font-family: verdana; font-size: 15px;">
                {{$student_profile->student_mothername}}
              </span>
            </a>
            <a class="website">
              <i class="icon-globe icon" style="font-family: verdana; font-size: 17px;">Student Address: </i>
              <span style="font-family: verdana; font-size: 15px;">
                {{$student_profile->student_address}}
              </span>
            </a>
            <a class="website">
              <i class="icon-globe icon" style="font-family: verdana; font-size: 17px;">Student Roll: </i>
              <span style="font-family: verdana; font-size: 15px;">
                {{$student_profile->student_roll}}
              </span>
            </a>
            <a class="website">
              <i class="icon-globe icon" style="font-family: verdana; font-size: 17px;">Student Addmission: </i>
              <span style="font-family: verdana; font-size: 15px;">
                {{$student_profile->student_addmissionyear}}
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
