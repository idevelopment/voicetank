@extends('layouts.frontend')
@section('content')
<div class="col-md-9 col-sep-md hidden-print">
  <div class="col-md-1 col-sm-1">
    <div class="pull-left">
      <div class="clearfix">&nbsp;</div>
    <div class="upvote">
      <a class="upvote"></a>
      <span class="count">5</span>
      <a class="downvote"></a>
    </div>
  </div>
  </div>
  <!-- end feedback-media -->

  <div class="col-md-11">
   <div class="feedback-wrapper single-wrapper">
    <div class="feedback-box">
     <div class="feedback-desc">
      <h3><a href="#">Install wizard for new setups</a></h3>
       <div class="feedback-meta clearfix">
         <a href="#"><i class="fa fa-calendar"></i> 08/09/2016 04:00</a>
        <a href="#"><i class="fa fa-user"></i> Glenn Hermans</a>
        <a href="#"><i class="fa fa-comments"></i> 3 Comments</a>
        <a href="#"><i class="fa fa-folder"></i> User interface</a>
        </div><!-- end meta -->

          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. anything embarrassing hidden in the middle of text uses a dictionary of over Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reThe generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. <strong>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</strong> All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
      </div>
     <!-- end desc -->
  </div>
  <!-- end feedback-box -->
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('feedback.comment', ['fid' => 1]) }}" method="post" class="form-horizontal">
          {{--  CSRF FIELD--}}
          {{ csrf_field() }}

          <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">

        <div class="form-group">
           <label for="message" class="col-md-3 control-label">Message</label>
           <div class="col-md-8">
             <textarea name="comment" id="message" class="form-control"></textarea>
           </div>
         </div>

         <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" class="btn btn-primary btn-sm">Reply</button>
            </div>
          </div>
        </form>
    </div>
  </div>

  <div class="panel">
    <div class="panel-heading">
      <h4>3 Comments</h4>
    </Div>
  <div class="panel-body comments">
        <ul class="media-list">
        <li class="media">
            <div class="comment">
              <div class="col-md-2">
                <a href="#" class="pull-left">
                    <img src="{{asset('images/user.png')}}" alt="" class="img-thumbnail">
                </a>
              </div>
                <div class="media-body">
                    <strong class="text-success">Jane Doe</strong>
                    <span class="text-muted">
                    <small class="text-muted">6 days ago</small></span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet.
                    </p>
                    <div class="pull-right">
                     <button class="btn btn-primary btn-xs">Report</button>
                     <button class="btn btn-danger btn-xs">Delete</button>
                  </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </li>
        <li class="media">
            <div class="comment">
              <div class="col-md-2">
                <a href="#" class="pull-left">
                    <img src="{{asset('images/user.png')}}" alt="" class="img-thumbnail">
                </a>
              </div>
                <div class="media-body">
                    <strong class="text-success">Jane Doe</strong>
                    <span class="text-muted">
                    <small class="text-muted">6 days ago</small></span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet.
                    </p>
                    <div class="pull-right">
                     <button class="btn btn-primary btn-xs">Report</button>
                     <button class="btn btn-danger btn-xs">Delete</button>
                  </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </li>
        <li class="media">
            <div class="comment">
              <div class="col-md-2">
                <a href="#" class="pull-left">
                    <img src="{{asset('images/user.png')}}" alt="" class="img-thumbnail">
                </a>
              </div>
                <div class="media-body">
                    <strong class="text-success">Jane Doe</strong>
                    <span class="text-muted">
                    <small class="text-muted">6 days ago</small></span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet.
                    </p>
                    <div class="pull-right">
                     <button class="btn btn-primary btn-xs">Report</button>
                     <button class="btn btn-danger btn-xs">Delete</button>
                  </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </li>
    </ul>
  </div>
</div>


    </div>

  </div>
 </div>

@endsection
