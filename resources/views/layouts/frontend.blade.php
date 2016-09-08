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
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/frontend.css" rel="stylesheet">
    <link href="/css/jquery.upvote.css" rel="stylesheet">


    <!-- Scripts -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    VoiceTank
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="fa fa-language fa-lg"></span>
                        </a>

                        <ul role="menu" class="dropdown-menu">
                            <li><a href="?lang=nl">Dutch</a></li>
                            <li><a href="?lang=en">English</a></li>
                        </ul>
                    </li>

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"><span class="fa fa-user fa-lg"></span></a></li>
                        <li><a href="{{ url('/register') }}"><span class="fa fa-user-plus fa-lg"></span></a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
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
                    @endif
                </ul>
            </div>
        </div>
    </nav>
  <div class="container-fluid">
    <div class="jumbotron">
    <p class="text-left">Please provide here your suggestion for new functionality for ProjectName.<br>
       We encourage you to review and vote for suggestions of others.<br>
    </p>
    </div>
    <div class="row">
     @yield('content')
     <div class="col-md-3">
       <div class="list-group">
           <a href="{{url('feedback/create')}}" class="btn btn-success btn-block"><i class="fa fa-plus"></i> Submit suggesstion</a>
       </div>

         <div class="heading_b"><span class="heading_text">Categories</span></div>
         <div class="list-group">
             <a href="javascript:void(0)" class="active list-group-item">All</a>
             <a href="javascript:void(0)" class="list-group-item">User interface <span class="pull-right badge">15</span></a>
             <a href="javascript:void(0)" class="list-group-item">Configuration Management <span class="pull-right badge">15</span></a>
             <a href="javascript:void(0)" class="list-group-item">Database <span class="pull-right badge">15</span></a>
             <a href="javascript:void(0)" class="list-group-item">Reports <span class="pull-right badge">15</span></a>
             <a href="javascript:void(0)" class="list-group-item">Sales <span class="pull-right badge">15</span></a>
         </div>
     </div>
</div>
</div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/jquery.upvote.js"></script>

</body>
</html>
