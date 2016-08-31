@extends('layouts.app')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Manage labels</h3>
        </div>
    </div>
<div class="clearfix"></div>

<div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-3">
                        <h4>Project list</h4>
                        <div class="clearfix">&nbsp;</div>
                         <ul class="list-group">
                          <li class="list-group-item active">Time Control</li>
                          <li class="list-group-item">VoiceTank</li>
                          <li class="list-group-item">ServiceForce</li>
                          <li class="list-group-item">Ring Me</li>
                          <li class="list-group-item">service status</li>
                        </ul>
                      </div>
                      <!-- /MAIL LIST -->

                      <!-- CONTENT MAIL -->
                      <div class="col-sm-9">
                          <div class="row">
                            <div class="col-md-8">
                              <div class="clearfix">&nbsp;</div>
                              <div class="btn-group">
                                <button class="btn btn-sm btn-success" type="button"><i class="fa fa-plus"></i> Save changes</button>
                                <button class="btn btn-sm btn-default" type="button"><i class="fa fa-plus"></i> New label</button>
                                <button class="btn btn-sm btn-danger" type="button" data-placement="bottom" data-toggle="tooltip" data-original-title="Remove label"><i class="fa fa-trash-o"></i></button>
                              </div>
                            </div>
                          </div>
                          <div class="clearfix">&nbsp;</div>
                          <div class="">
                            <table class="table table-hover">
                              <thead>
                                <th style="width:3%;">#</th>
                                <th>Label</th>
                                <th>Color</th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="checkbox">
                                     <label>
                                       <input type="checkbox" name="id">
                                     </label>
                                    </div>
                                  </td>
                                  <td><input type="text" name="label" class="form-control"></td>
                                  <td><input type="text" name="color" class="form-control LabelColor" value="#5367ce"></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                      </div>
                      <!-- /CONTENT MAIL -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Bootstrap Colorpicker -->
    <script>
      $(document).ready(function() {
        $('.LabelColor').colorpicker();
      });
    </script>
    <!-- /Bootstrap Colorpicker -->
            @endsection
