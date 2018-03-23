@extends('student_layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center">Update Profile</h2>
            <p class="alert-success">
              <?php
                  $message = Session::get('message');

                  if($message) {
                    echo "$message";
                    Session::put('message', null);
                  }
              ?>
            </p>
            <form class="forms-sample" method="post" action="{{URL::to('/student_own_update')}}">

              {{csrf_field()}}

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
                <button type="submit" class="btn btn-success btn-block">
                  Update Profile
                </button>
            </form>
        </div>
    </div>
</div>



@endsection
