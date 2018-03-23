@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center">Update Student</h2>

            <form class="forms-sample" method="post" action="{{URL::to('/updatestudent', $allStudentsEditView->student_id)}}">

              {{csrf_field()}}

                <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control p-input" aria-describedby="emailHelp" name="student_name" value="{{$allStudentsEditView->student_name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Roll</label>
                    <input type="text" class="form-control p-input" name="student_roll" value="{{$allStudentsEditView->student_roll}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Father Name</label>
                    <input type="text" class="form-control p-input" name="student_fathername" value="{{$allStudentsEditView->student_fathername}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mother Name</label>
                    <input type="text" class="form-control p-input" name="student_mothername" value="{{$allStudentsEditView->student_mothername}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control p-input" name="student_email" value="{{$allStudentsEditView->student_email}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" class="form-control p-input" name="student_phone" value="{{$allStudentsEditView->student_phone}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control p-input" name="student_address" value="{{$allStudentsEditView->student_address}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control p-input" name="student_password" value="{{$allStudentsEditView->student_password}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Addmission Year</label>
                    <input type="date" class="form-control p-input" name="student_addmissionyear" value="{{$allStudentsEditView->student_addmissionyear}}">
                </div>
                <button type="submit" class="btn btn-success btn-block">Update</button>
            </form>
        </div>
    </div>
</div>



@endsection
