@extends('layout')
@section('content')

  <div class="card">
    <div class="card-body">
      <h2 class="card-title">Data table</h2>
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
              <tr>
                  <td>1</td>
                  <td>27/08/12</td>
                  <td>Edinburgh</td>
                  <td>New York</td>
                  <td>$1500</td>
                  <td>$3200</td>
                  <td>
                    <button class="btn btn-outline-primary">View</button>
                    <button class="btn btn-outline-warning">Edit</button>
                    <button class="btn btn-outline-danger">Delete</button>
                  </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>



@endsection
