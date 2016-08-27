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
                                <td>{{ $department->managers->name }}</td>
                                <td>{{ count($department->teams->name) }} Teams</td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach

                        {{ $departments->links() }}
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
                    <form action="" method="post" class="">
                      <div class="form-group">
                        <label for="name">Department name <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="description">Description <span class="text-danger">*</span></label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                      </div>

                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
@endsection
