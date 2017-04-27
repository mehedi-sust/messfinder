<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mess Finder') }}</title>

    <!-- Styles -->
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    
    <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/view-notifications.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
    
    <!-- Custom CSS for only registered user's page. This should be used as
    <link href="{{ asset('css/registered-user-home-page.css') }}" rel="stylesheet">
    -->
    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/
    css">
    <!-- Scripts -->

    <!-- jQuery -->
    <script src="js/jquery-3.1.1.js"></script>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/view_notifications.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    
    @section('custom_css_js')

    @show

    <style type="text/css">
    .container2 {
        padding: 8%;
        margin-left: 15%;
    }
    textarea{
        resize:none;
    }
    #user_dropdown{
        z-index: 5
    }
</style>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>


<body>
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Mess Finder</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                @if (Auth::check() and Auth::user()->reg == "admin")
                    <li>
                        <a href="admin_home">Admin Dashboard</a>
                    </li>
                @endif
                    <li>
                        <a href="about">About</a>
                    </li>
                    <li>
                        <a href="http://www.sust.edu/d/cse/contact-us">Contact</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->

                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Sign Up</a></li>
                        @else
                        <ul class = "nav navbar-nav navbar-right">
                    <li id="noti_Container">
                        <div id="noti_Counter" title="Notifications"></div>   <!--SHOW NOTIFICATIONS COUNT.-->
                        
                        <!--A CIRCLE LIKE BUTTON TO DISPLAY NOTIFICATION DROPDOWN.-->
                        <!--
                        <div id="noti_Button"></div>    
                        -->
                        <div id="noti_Button" title="Notifications"><a href="#"><span class="glyphicon glyphicon-bell"></span></a></div>

                        <!--THE NOTIFICAIONS DROPDOWN BOX.-->
                        <div id="notifications">
                            <h3 id=noti_header>Notifications</h3>
                            <div style="height:300px;"></div>
                            <div class="seeAll"><a href="#">See All</a></div>
                        </div>
                    </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" id = "user_dropdown">
                                    <li><a href="">
                                        My Profile
                                        </a>
                                    </li>
                                    <li><a href="">
                                        My Preferences
                                        </a>
                                    </li>
                                    <li class = "divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        @yield('content')
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
