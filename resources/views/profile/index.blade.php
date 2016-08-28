@extends('layouts.app')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Update profile</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">Information</a></li>
                <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact information</a></li>
                <li role="presentation"><a href="#security" aria-controls="security" role="tab" data-toggle="tab">Security</a></li>
            </ul>

            <div class="x_panel">
                <div class="x_content">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="info">
                            @include('profile.partials.information')
                        </div>
                        <div role="tabpanel" class="tab-pane fade in" id="contact">
                            @include('profile.partials.contact')
                        </div>
                        <div role="tabpanel" class="tab-panel fade in" id="security">
                            @include('profile.partials.security')
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection