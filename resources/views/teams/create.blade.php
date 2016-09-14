@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
  <div class="x_content">

<div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Basic information</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Users</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left">
                            {{ csrf_field() }}
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Team name <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="leader" class="control-label col-md-3 col-sm-3 col-xs-12">Team Leader <span class="text-danger">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select name="leader" id="leader" class="form-control">
                                  <option value="">—- select the team leader. --</option>

                                  @foreach($users as $leader)
                                      <option value="{{ $leader->id }}">{{ $leader->name }}</option>
                                  @endforeach
                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="description" id="description" class="form-control" rows="8"></textarea>
                            </div>
                          </div>

                        </form>

                      </div>
                      <div id="step-2">
                        <form class="form-horizontal form-label-left">

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="users">Users <span class="text-danger">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="users[]" id="users" class="form-control col-md-7 col-xs-12" multiple="">
                                <option value="">-- Select the team users. --</option>
                                @foreach($users as $member)
                                    <option value="{{ $member->id }}">{{ $member->name }}</option>
                                @endforeach
                            </select>
                            </div>
                          </div>

                        </form>
                      </div>

                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
@endsection
