@extends('layouts.application')

@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Update your account information
            </div>

            <div class="panel-body">
                <form method="post" action="{!! url('/account/update') !!}" class="form-horizontal">

                    <div class="form-group">
                        <label class="col-md-3" for="name" >Name: <span class="text-danger">*</label>

                        <div class="col-md-4">
                            <input class="form-control" id="name" name="name" value="{!! $user->name !!}" placeholder="Your name" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-3">Email: <span class="text-danger">*</label>

                        <div class="col-md-4">
                            <input class="form-control" id="email" name="email" value="{!! $user->email !!}" placeholder="your email address" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-3">Password:</label>

                        <div class="col-md-4">
                            <input type="text" placeholder="new password" class="form-control" id="password" name="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3" for="pass_confirm">Password conformation:</label>

                        <div class="col-md-4">
                            <input type="text" id="pass_confirm" class="form-control" placeholder="Password confirmation" name="password_confirmation">
                        </div>
                    </div>

                    <div class="form-group col-md-9">
                        <button type="submit" class="btn btn-success">Update</button>
                        <button type="reset"  class="btn btn-danger">Reset</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
