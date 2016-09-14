@extends('layouts.frontend')

@section('content')
<div class="col-md-9 col-sep-md hidden-print">
    @foreach($ideas as $idea)
        <div class="feedback-wrapper">
            <div class="feedback-box row">
                <div class="feedback-media col-md-2 col-sm-2">
                    <div class="upvote">
                        <a class="upvote"></a>
                        <span class="count">5</span>
                        <a class="downvote"></a>
                    </div>
                </div><!-- end feedback-media -->

                <div class="feedback-desc col-md-8 col-sm-8">
                    <h3><a href="{{ route('feedback.show', ['fid' => $idea->id])}}">{{ $idea->title }}</a></h3>
                    <div class="feedback-meta clearfix">
                        <a href="#"><i class="fa fa-calendar"></i> {{ $idea->created_at }}</a>
                        <a href="#"><i class="fa fa-user"></i> {{ $idea->creator->name }}</a>
                        <a href="#"><i class="fa fa-comments"></i> {{ count($idea->comments) }} Comments</a>
                        <a href="#"><i class="fa fa-folder"></i> {{ $idea->category->name }}</a>
                    </div><!-- end meta -->
                    <p>{{ $idea->description }}</p>
                    <a href="{{ route('feedback.show', ['fid' => $idea->id])}}" class="btn btn-info btn-sm" title="">Read More</a>
                </div><!-- end desc -->
            </div><!-- end feedback-box -->
        </div><!-- end feedback-wrapper -->
    @endforeach
  </div>


<script>
$( document ).ready(function() {

            function gen(target, cssClass, params) {
              var obj = $('#templates .upvote').clone();
              obj.addClass(cssClass);
              $(target).append(obj);
              return obj.upvote(params);
          }

          $(function() {
                  function gen_examples(params) {
                      gen('#topic', '', params);
                  }
                  function gen_unix(params) {
                      gen('#unix', 'upvote-unix', params);
                  }
                  function gen_programmers(params) {
                      gen('#programmers', 'upvote-programmers', params);
                  }
                  function gen_serverfault(params) {
                      gen('#serverfault', 'upvote-serverfault', params);
                  }
                  var functions = [gen_examples, gen_unix, gen_programmers, gen_serverfault];
                  for (var i in functions) {
                      var fun = functions[i];
                      fun();
                      fun({count: 5});
                      fun({count: 6, upvoted: 1});
                      fun({count: 4, downvoted: 1});
                      fun({count: 15, starred: 1});
                      fun({count: 16, upvoted: 1, starred: 1});
                      fun({count: 14, downvoted: 1, starred: 1});
                  }
          });


});


</script>
@endsection
