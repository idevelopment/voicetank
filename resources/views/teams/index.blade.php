@extends('layouts.app')

@section('content')
<div class="page-title">
  <div class="title_left">
    <h3>Teams</h3>
  </div>

  <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 pull-right">
      <a href="{{url('users/teams/create')}}" class="btn btn-primary">Create a new team</a>
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
                          <th>Total users</th>
                          <th style="width: 20%">Actions</th>
                        </tr>
                      </thead>
                    </table>

                </div>
              </div>
            </div>


@endsection
