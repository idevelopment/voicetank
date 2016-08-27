@extends('layouts.app')

@section('content')
<div class="page-title">
              <div class="title_left">
                <h3>Project name</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Project details</a></li>
                  <li role="presentation"><a href="#categories" aria-controls="profile" role="tab" data-toggle="tab">Categories</a></li>
                  <li role="presentation"><a href="#suggesstions" aria-controls="messages" role="tab" data-toggle="tab">Feedback</a></li>
                  <li role="presentation"><a href="#workload" aria-controls="workload" role="tab" data-toggle="tab">Workload</a></li>
                  <li role="presentation"><a href="#teams" aria-controls="teams" role="tab" data-toggle="tab">Teams</a></li>
                </ul>

                <div class="x_panel">
                  <div class="x_content">
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="home">
                        @include('projects.partials.backend.details')
                      </div>
                      <div role="tabpanel" class="tab-pane" id="suggesstions">
                        @include('projects.partials.backend.suggesstions')
                      </div>
                  </div>
              </div>
            </div>
            </div>
      @endsection
