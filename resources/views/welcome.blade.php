@extends('layouts.frontend')

@section('content')
<div class="col-md-9 col-sep-md hidden-print">
                          <div class="pull-left">

                            <div class="upvote">
                              <a class="upvote"></a>
                              <span class="count">5</span>
                              <a class="downvote"></a>
                            </div>

                            <br>

                            <div class="upvote">
                              <a class="upvote"></a>
                              <span class="count">5</span>
                              <a class="downvote"></a>
                            </div>

                            <br>

                            <div class="upvote">
                              <a class="upvote"></a>
                              <span class="count">5</span>
                              <a class="downvote"></a>
                            </div>

                            <br>

                          </div>
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
