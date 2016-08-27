@extends('layouts.app')

@section('content')
<div class="page-title">
  <div class="title_left">
    <h3>Departments</h3>
  </div>

  <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 pull-right">
      <button class="btn btn-primary" data-toggle="modal" data-target="#create">Create a new department</button>
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
                                <td>Deparment manager name</td>
                                <td>{{-- count($department->teams->name) --}} Teams</td>
                                <td></td>
                                <td>
                                    <a href="" class="label label-primary">Show</a>
                                    <a href="" class="label label-warning">Edit</a>
                                    <a href="" class="label label-danger">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>

                </div>
              </div>
            </div>

            <!-- Create department -->
            <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create a new department</h4>
                  </div>
                  <div class="modal-body">
                    <form action="{{ route('departments.save') }}" method="post">
                        {{ csrf_field() }}
                      <div class="form-group">
                        <label for="name">Department name <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control">
                      </div>

                        <div class="form-group">
                            <label for="manager"> Department Manager: <span class="text-danger">*</span></label>
                            <select name="manager" class="form-control" id="manager">
                                <option value="">-- Select the manager --</option>

                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                      <div class="form-group">
                        <label for="description">Description <span class="text-danger">*</span></label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                      </div>

                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                      </form>
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
@endsection
