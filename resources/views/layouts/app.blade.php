<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>VoiceTank</title>

    <!-- Styles -->
    <link href="/css/backend.css" rel="stylesheet">
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="nav-md footer_fixed">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a id="menu_toggle" class="site_title"><i class="fa fa-bars" style="color:white;"></i> <span>Voicetank</span></a>
          </div>

          <div class="clearfix"></div>
          <br />
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="{{url('home')}}"><i class="fa fa-home"></i> Home</a></li>
                <li><a><i class="fa fa-comments"></i>Feedback management <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{url('feedback/category')}}">Categories</a></li>
                    <li><a href="{{url('feedback/list')}}">Feedback list</a></li>
                    <li><a href="{{url('feedback/labels')}}">Labels</a></li>
                    <li><a href="{{url('feedback')}}">Status</a></li>
                  </ul>
                </li>

                <li><a><i class="fa fa-folder"></i>Projects<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{url('projects/create')}}">Create</a></li>
                    <li><a href="{{url('projects')}}">List</a></li>
                  </ul>
                </li>

                <li><a><i class="fa fa-bar-chart-o"></i>Statistics <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="#">link</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-user"></i>User management <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{url('users/departments')}}">Departments</a></li>
                    <li><a href="{{url('users/teams')}}">Teams</a></li>
                    <li><a href="{{url('users/roles')}}">Roles</a></li>
                    <li><a href="{{url('users/list')}}">Users</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-cog"></i>Settings <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{url('settings')}}">General</a></li>
                    <li><a href="{{url('settings/email')}}">Email settings</a></li>
                  </ul>
                </li>
              </ul>
            </div>


          </div>
          <!-- /sidebar menu -->

        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
            <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user"></i> {{ Auth::user()->name }}
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;"> Profile</a></li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li><a href="javascript:;">Help</a></li>
                  <li>
                      <a href="{{ url('/logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-red">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <li>
                    <a>
                      <span class="image"><i class="fa fa-user"></i></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><i class="fa fa-user"></i></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><i class="fa fa-user"></i></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><i class="fa fa-user"></i></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        @yield('content')
      </div>
    </div>

  <!-- /page content -->

  <!-- footer content -->
  <footer>
    <div class="pull-right">
      &copy;  <a href="https://idevelopment.be">iDevelopment</a>
    </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
</div>

<!-- jQuery -->
<script src="/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/vendors/nprogress/nprogress.js"></script>
<!-- Flot -->
<script src="/vendors/Flot/jquery.flot.js"></script>
<script src="/vendors/Flot/jquery.flot.pie.js"></script>
<script src="/vendors/Flot/jquery.flot.time.js"></script>
<script src="/vendors/Flot/jquery.flot.stack.js"></script>
<script src="/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="/vendors/flot.curvedlines/curvedLines.js"></script>

<script src="/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

<!-- DateJS -->
<script src="/vendors/DateJS/build/date.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="/vendors/moment/moment.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="/js/custom.min.js"></script>

<!-- Flot -->
<script>
$(document).ready(function() {
  $('#wizard').smartWizard();

  $('.buttonNext').addClass('btn btn-success');
  $('.buttonPrevious').addClass('btn btn-primary');
  $('.buttonFinish').addClass('btn btn-default');

  //define chart clolors ( you maybe add more colors if you want or flot will add it automatic )
  var chartColours = ['#3498DB', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'];

  //generate random number for charts
  randNum = function() {
    return (Math.floor(Math.random() * (1 + 40 - 20))) + 20;
  };

  var d1 = [];
  //var d2 = [];

  //here we generate data for chart
  for (var i = 0; i < 30; i++) {
    d1.push([new Date(Date.today().add(i).days()).getTime(), randNum() + i + i + 10]);
    //    d2.push([new Date(Date.today().add(i).days()).getTime(), randNum()]);
  }

  var chartMinDate = d1[0][0]; //first day
  var chartMaxDate = d1[20][0]; //last day

  var tickSize = [1, "day"];
  var tformat = "%d/%m/%y";

  //graph options
  var options = {
    grid: {
      show: true,
      aboveData: true,
      color: "#3f3f3f",
      labelMargin: 10,
      axisMargin: 0,
      borderWidth: 0,
      borderColor: null,
      minBorderMargin: 5,
      clickable: true,
      hoverable: true,
      autoHighlight: true,
      mouseActiveRadius: 100
    },
    series: {
      lines: {
        show: true,
        fill: true,
        lineWidth: 2,
        steps: false
      },
      points: {
        show: true,
        radius: 4.5,
        symbol: "circle",
        lineWidth: 3.0
      }
    },
    legend: {
      position: "ne",
      margin: [0, -25],
      noColumns: 0,
      labelBoxBorderColor: null,
      labelFormatter: function(label, series) {
        // just add some space to labes
        return label + '&nbsp;&nbsp;';
      },
      width: 40,
      height: 1
    },
    colors: chartColours,
    shadowSize: 0,
    tooltip: true, //activate tooltip
    tooltipOpts: {
      content: "%s: %y.0",
      xDateFormat: "%d/%m",
      shifts: {
        x: -30,
        y: -50
      },
      defaultTheme: false
    },
    yaxis: {
      min: 0
    },
    xaxis: {
      mode: "time",
      minTickSize: tickSize,
      timeformat: tformat,
      min: chartMinDate,
      max: chartMaxDate
    }
  };
  var plot = $.plot($("#placeholder33x"), [{
    label: "Approved Suggestions",
    data: d1,
    lines: {
      fillColor: "rgba(237, 237, 237, 1)"
    }, //#96CA59 rgba(150, 202, 89, 0.42)
    points: {
      fillColor: "#fff"
    }
  }], options);
});
</script>
<!-- /Flot -->

</body>
</html>
