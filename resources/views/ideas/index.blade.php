@extends('layouts.application')

@section('content')
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            @foreach($ideas as $idea)
                <div class="well">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="..." alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            ...
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

        </div>
    </div>
@endsection