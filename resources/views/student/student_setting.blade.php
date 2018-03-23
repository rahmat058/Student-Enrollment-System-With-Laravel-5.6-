@extends('student_layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center">Update Profile</h2>

            <form class="forms-sample" method="post" action="">

              {{csrf_field()}}

                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" class="form-control p-input" name="student_phone" value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control p-input" name="student_address" value="">
                </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control p-input" name="student_password" value="">
              </div>
                <button type="submit" class="btn btn-success btn-block">
                  Update Profile
                </button>
            </form>
        </div>
    </div>
</div>



@endsection
