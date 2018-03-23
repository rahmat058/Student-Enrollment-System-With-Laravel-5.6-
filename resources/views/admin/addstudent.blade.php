@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center">Add Student</h2>

            <p class="alert-success">
              <?php
                  $exception = Session::get('exception');

                  if($exception) {
                    echo "$exception";
                    Session::put('exception', null);
                  }
              ?>
            </p>

            <form class="forms-sample" method="post" action="{{URL::to('/savestudent')}}" enctype="multipart/form-data">

              {{csrf_field()}}

                <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Enter Student Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Roll</label>
                    <input type="text" class="form-control p-input" name="student_roll" placeholder="Student roll">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Father Name</label>
                    <input type="text" class="form-control p-input" name="student_fathername" placeholder="Student Father Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mother Name</label>
                    <input type="text" class="form-control p-input" name="student_mothername" placeholder="Student Mother Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control p-input" name="student_email" placeholder="Student Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" class="form-control p-input" name="student_phone" placeholder="Student Phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control p-input" name="student_address" placeholder="Student Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control p-input" name="student_password" placeholder="Student Password">
                </div>
                <div class="form-group">
                    <label>Upload file</label>
                    <div class="row">
                      <div class="col-12">
                        <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                        <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Addmission Year</label>
                    <input type="date" class="form-control p-input" name="student_addmissionyear" placeholder="Addmission Year">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Department</label>
                    <select class="form-control p-input" name="student_department">
                        <option value="1">CSE</option>
                        <option value="2">ECE</option>
                        <option value="3">BBA</option>
                        <option value="4">EEE</option>
                        <option value="5">MBA</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-block">Add Student</button>
            </form>
        </div>
    </div>
</div>



@endsection
