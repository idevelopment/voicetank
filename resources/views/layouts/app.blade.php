<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Voicetank</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('') }}">
                   <i class="fa fa-microphone"></i> Voicetank
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li><a href="{{ url('faq') }}">FAQ</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}" title="Login"><i class="fa fa-user fa-lg"></i></a></li>
                        <li><a href="{{ url('/register') }}" title="Register"><i class="fa fa-user-plus fa-lg"></i></a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><i href="#"><i class="fa fa-btn fa-cogs"></i>Account configuration</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
<div class="page-header" style="margin-top: -10px; border-bottom: 0px;">
    <h2>Welcome to voicetalk Feedback!</h2>
</div>
<div class="row">
  <div class="col-md-12">
   <p>This site is the most effective place to share your feature requests and ideas for improving our products and services.<br />
      Our development teams regularly review the ideas and will get in touch with our contributors in case we need more information.
   </p>
 </div>
</div>

<div class="clearfix">&nbsp;</div>
<div class="row">
    <div class="col-md-8">
     @yield('content')
    </div>

   <div class="col-md-4">
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


<footer id="footer">
 <div class="row">
  <div class="text-center" style="padding-bottom: 10px;">&copy; 2016 iDevelopment - All rights reserved</div>
 </div>
</footer>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.2.0/list.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
