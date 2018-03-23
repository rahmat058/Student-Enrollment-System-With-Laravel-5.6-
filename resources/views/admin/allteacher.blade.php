@extends('layout')
@section('content')

  <div class="card">
    <div class="card-body">
      <h2 class="card-title">All Teacher</h2>
      <div class="row">
        <div class="col-12">
          <table id="order-listing" class="table table-striped" style="width:100%;">
            <thead>
              <tr>
                  <th>Teacher Name</th>
                  <th>Teacher Phone</th>
                  <th>Teacher Image</th>
                  <th>Teacher Address</th>
                  <th>Teacher Department</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>

              @foreach($allteacher_info as $all_teacher)
              <tr>
                  <td>{{$all_teacher->teachers_name}}</td>
                  <td>{{$all_teacher->teachers_phone}}</td>
                  <td><img src="{{URL::to($all_teacher->teachers_imagestring)}}" height="80" width="100" style="border-radius: 50%;"></td>
                  <td>{{$all_teacher->teachers_address}}</td>
                  <td>
                      @if ($all_teacher->teachers_department == 1)
                          <span class="label label-success">{{'CSE'}}</span>
                      @elseif ($all_teacher->teachers_department == 2)
                         <span class="label label-primary">{{'ECE'}}</span>
                      @elseif ($all_teacher->teachers_department == 3)
                         <span class="label label-warning">{{'BBA'}}</span>
                      @elseif ($all_teacher->teachers_department == 4)
                         <span class="label label-info">{{'EEE'}}</span>
                      @elseif ($all_teacher->teachers_department == 5)
                         <span class="label label-important">{{'MBA'}}</span>
                      @endif
                  </td>
                  <td>
                    <a href="{{URL::to('/teacherdelete/'.$all_teacher->teachers_id)}}" id="delete">
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
