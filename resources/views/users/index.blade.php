@extends('layouts.app')

@section('content')
<div class="page-title">
  <div class="title_left">
    <h3>User management</h3>
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
                          <th>Email</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th style="width: 20%">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                        <tr>
                          <td>#</td>
                          <td><a>{!! $user->name !!}</a></td>
                          <td>{!! $user->email !!}</td>
                          <td>Administrator </td>
                          <td><button type="button" class="btn btn-success btn-xs">Active</button></td>
                          <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                </div>
              </div>
            </div>

@endsection
