@extends('layout')
@section('content')

  <div class="card">
    <div class="card-body">
      <h2 class="card-title">All Student</h2>
      <p class="alert-success">
        <?php
            $message = Session::get('message');

            if($message) {
              echo "$message";
              Session::put('message', null);
            }
        ?>
      </p>
      <div class="row">
        <div class="col-12">
          <table id="order-listing" class="table table-striped" style="width:100%;">
            <thead>
              <tr>
                  <th>Student Roll</th>
                  <th>Student Name</th>
                  <th>Student Phone</th>
                  <th>Student Image</th>
                  <th>Student Address</th>
                  <th>Student Department</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>

              @foreach($allstudent_info as $all_student)
              <tr>
                  <td>{{$all_student->student_roll}}</td>
                  <td>{{$all_student->student_name}}</td>
                  <td>{{$all_student->student_phone}}</td>
                  <td><img src="{{URL::to($all_student->student_image)}}" height="80" width="100" style="border-radius: 50%;"></td>
                  <td>{{$all_student->student_address}}</td>
                  <td>
                      @if ($all_student->student_department == 1)
                          <span class="label label-success">{{'CSE'}}</span>
                      @elseif ($all_student->student_department == 2)
                         <span class="label label-primary">{{'ECE'}}</span>
                      @elseif ($all_student->student_department == 3)
                         <span class="label label-warning">{{'BBA'}}</span>
                      @elseif ($all_student->student_department == 4)
                         <span class="label label-info">{{'EEE'}}</span>
                      @elseif ($all_student->student_department == 5)
                         <span class="label label-important">{{'MBA'}}</span>
                      @endif
                  </td>
                  <td>
                    <a href="{{URL::to('/studentview/'.$all_student->student_id)}}">
                      <button class="btn btn-outline-primary">View</button>
                    </a>
                    <a href="{{URL::to('/studentedit/'.$all_student->student_id)}}">
                      <button class="btn btn-outline-warning">Edit</button>
                    </a>
                    <a href="{{URL::to('/studentdelete/'.$all_student->student_id)}}" id="delete">
                      <button class="btn btn-outline-danger">Delete</button>
                    </a>
                  </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>



@endsection
