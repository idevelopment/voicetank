@extends('layouts.application')

@section('content')
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @foreach($query as $data)
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading{!! $data->id !!}">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{!! $data->id !!}" aria-expanded="false" aria-controls="collapse{!! $data->id !!}">
                                    {!! $data->question !!}
                                </a>

                                @if(Auth::check())
                                    <div class="btn-group pull-right">
                                        <a href="" class="btn btn-xs btn-danger">
                                            <span class="fa fa-btn fa-pencil"></span>
                                        </a>
                                        <a href="" class="btn btn-xs btn-danger">
                                            <span class="fa fa-btn fa-close"></span>
                                        </a>
                                    </div>
                                @endif
                            </h4>
                        </div>
                        <div id="collapse{!! $data->id !!}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{!! $data->id !!}">
                            <div class="panel-body">
                                {!! $data->answer !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{url('search')}}" class="form-inline">
                        <div class="form-group">
                            <label class="sr-only">Keywords</label>
                            <input type="text" name="search" id="searchInput" placeholder="keywords" class="form-control">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                        <ul class="list-unstyled category_list">
                            <li>
                                <span class="badge pull-right">116</span>
                                <a href="#">Group 1</a><br>
                            </li>
                            <li>
                                <span class="badge pull-right">16</span>
                                <a href="#">Group 2</a><br>
                            </li>
                            <li>
                                <span class="badge pull-right">16</span>
                                <a href="#">Group 3</a><br>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection