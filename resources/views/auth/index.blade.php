@extends('layouts.application')

@section('content')
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
        {{--  Nav tabs --}}
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#active" aria-controls="active" role="tab" data-toggle="tab">
                    Active users <span class="label label-success"></span>
                </a>
            </li>
            <li role="presentation" class"active">
            <a href="#blocked" aria-controls="blocked" role="tab" data-toggle="tab">
                Blocked users <span class="label label-danger"></span>
            </a>
            </li>
        </ul>
        {{-- End nav tabs --}}

        {{-- Tab content --}}
        <div class="tab-content">
            {{-- Active users tab --}}
            <div role="tabpanel" class="tab-pane active" id="active">

            </div>
            {{-- End active users tab --}}

            {{-- Blocked users tab --}}
            <div role="tabpanel" class="tab-pane" id="blocked">

            </div>
            {{-- End blocked users tab --}}
        </div>
        {{-- End tab content --}}
    </div>
@endsection
