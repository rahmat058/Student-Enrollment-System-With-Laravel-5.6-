@extends('layout')
@section('content')

<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">All Students</h2>
      @php
        $student = DB::table('student_tbl')
                   -> count('student_id');
      @endphp
      <p style="font-family: cursive; font-size: 20px; color: maroon; font-weight: bold">{{$student}}</p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-1" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">All Teacher</h2>
      @php
        $teacher = DB::table('teachers_tbl')
                   -> count('teachers_id');
      @endphp
      <p style="font-family: cursive; font-size: 20px; color: maroon; font-weight: bold">{{$teacher}}</p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-2" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Tution Fees</h2>
      <p style="font-family: cursive; font-size: 18px; color: maroon; font-weight: bold">Monthly: 30000 tk</p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-3" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Revenue</h2>
      <p style="font-family: cursive; font-size: 18px; color: maroon; font-weight: bold">Yearly: 100000 tk</p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-4" class="card-float-chart"></div>
    </div>
  </div>
</div>
</div>


<div class="col-6 grid-margin d-flex align-items-stretch">
  <div class="row">
    <div class="col-8 col-sm-6 col-md-12 mb-3">
      <div class="social-panel bg-facebook">
        <p class="mb-0">Computer Science Engineering</p></div>
    </div>
    <div class="col-6 col-sm-6 col-md-12 mb-3">
      <div class="social-panel bg-twitter"></i><p class="mb-0">ECE</p></div>
    </div>
    <div class="col-6 col-sm-6 col-md-12 mb-3">
      <div class="social-panel bg-google"></i><p class="mb-0">BBA</p></div>
    </div>
    <div class="col-6 col-sm-6 col-md-12">
      <div class="social-panel bg-linkedin" style="margin-bottom: 14px"><p class="mb-0">EEE</p></div>
    </div>
    <div class="col-6 col-sm-6 col-md-12">
      <div class="social-panel bg-facebook"><p class="mb-0">MBA</p></div>
    </div>
  </div>
</div>

@endsection
