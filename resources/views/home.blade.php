@extends('layouts.app')

@section('content')
<div class="clearfix">&nbsp;</div>
<div class="row top_tiles">

  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
      <div class="count">179</div>
      <h3>Total projects</h3>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-comments-o"></i></div>
      <div class="count">179</div>
      <h3>New feedback messages</h3>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-search"></i></div>
      <div class="count">179</div>
      <h3>Investigating feedback</h3>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-check-square-o"></i></div>
      <div class="count">179</div>
      <h3>Started working on suggestion</h3>
    </div>
  </div>
</div>
<div class="clearfix">&nbsp;</div>

<div class="row">
  <div class="col-md-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Feedback Summary <small>Weekly progress</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="clearfix">&nbsp;</div>
          <div class="clearfix">&nbsp;</div>

          <div class="demo-container">
            <div id="placeholder33x" class="demo-placeholder" style="height:368px;"></div>
          </div>
        </div>

        <div class="col-md-3 col-sm-12 col-xs-12">
          <div>
            <div class="x_title">
              <h2>Top 5 Feedbackers</h2>

              <div class="clearfix"></div>
            </div>
            <ul class="list-unstyled top_profiles scroll-view">
              <li class="media event">
                <a class="pull-left border-blue profile_thumb">
                  <i class="fa fa-user blue"></i>
                </a>
                <div class="media-body">
                  <a class="title" href="#">Ms. Mary Jane</a>
                  <p> <small>112 feedback posts</small>
                </div>
              </li>
              <li class="media event">
                <a class="pull-left border-blue profile_thumb">
                  <i class="fa fa-user blue"></i>
                </a>
                <div class="media-body">
                  <a class="title" href="#">Ms. Mary Jane</a>
                  <p> <small>112 feedback posts</small>
                  </p>
                </div>
              </li>
              <li class="media event">
                <a class="pull-left border-blue profile_thumb">
                  <i class="fa fa-user blue"></i>
                </a>
                <div class="media-body">
                  <a class="title" href="#">Ms. Mary Jane</a>
                  <p> <small>112 feedback posts</small>
                  </p>
                </div>
              </li>
              <li class="media event">
                <a class="pull-left border-blue profile_thumb">
                  <i class="fa fa-user blue"></i>
                </a>
                <div class="media-body">
                  <a class="title" href="#">Ms. Mary Jane</a>
                  <p> <small>112 feedback posts</small>
                  </p>
                </div>
              </li>
              <li class="media event">
                <a class="pull-left border-blue profile_thumb">
                  <i class="fa fa-user blue"></i>
                </a>
                <div class="media-body">
                  <a class="title" href="#">Ms. Mary Jane</a>
                  <p> <small>112 feedback posts</small>
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection
