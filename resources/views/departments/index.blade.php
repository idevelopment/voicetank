@extends('layouts.app')

@section('content')
<div class="page-title">
  <div class="title_left">
    <h3>Departments</h3>
  </div>

  <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
      <button class="btn btn-primary">Create a new department</button>
    </div>
</div>

<div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <table class="table table-striped bulk_action">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Name</th>
                          <th>Manager</th>
                          <th>Total teams</th>
                          <th>Total users</th>
                          <th style="width: 20%">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($departments as $department)
                            <tr>
                                <td><code>#D{{ $department->id }}</code></td>
                                <td>{{ $department->name }}</td>
                                <td>{{ $department->managers->name }}</td>
                                <td>{{ count($department->teams->name) }} Teams</td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>

                </div>
              </div>
            </div>

@endsection
