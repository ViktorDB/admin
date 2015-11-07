<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Light Bootstrap Dashboard by Creative Tim</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />


        <!-- Bootstrap core CSS     -->
        <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- Animation library for notifications   -->
        <link href="{{ URL::asset('assets/css/animate.min.css') }}" rel="stylesheet"/>

        <!--  Light Bootstrap Table core CSS    -->
        <link href="{{ URL::asset('assets/css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>


        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="{{ URL::asset('assets/css/demo.css') }}" rel="stylesheet" />


        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="{{ URL::asset('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
    </head>
    <body>
        <div class="wrapper">

            @section('sidebar')
                <div class="sidebar" data-color="purple" data-image="{{ URL::asset('assets/img/sidebar-5.jpg') }}">

                    <!--

                        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
                        Tip 2: you can also add an image using data-image tag

                    -->

                    <div class="sidebar-wrapper">
                        <div class="logo">
                            <a href="" class="simple-text">
                                myCloset
                            </a>
                        </div>

                        <ul class="nav">
                            <li class="{{ Request::is('office/dashboard') ? 'active' : ''}}">
                                <a href="dashboard">
                                    <i class="pe-7s-graph"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="{{ Request::is('office/users') ? 'active' : ''}}">
                                <a href="users">
                                    <i class="pe-7s-user"></i>
                                    <p>Users</p>
                                </a>
                            </li>
                            <li class="{{ Request::is('office/api') ? 'active' : ''}}">
                                <a href="api">
                                    <i class="pe-7s-science"></i>
                                    <p>Api</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            @show

            <div class="main-panel">

                @section('navigation')
                    <nav class="navbar navbar-default navbar-fixed">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">{{Request::segment(2)}}</a>
                            </div>
                            <div class="collapse navbar-collapse">

                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a href="#">
                                            Log out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                @show

                @yield('content')

                @section('footer')
                    <footer class="footer">
                        <div class="container-fluid">
                            <nav class="pull-left">
                                <ul>
                                    <li>
                                        <a href="#">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Company
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Portfolio
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Blog
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <p class="copyright pull-right">
                                &copy; 2015 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                            </p>
                        </div>
                    </footer>
                @endsection

            </div>

        </div>

        <!--   Core JS Files   -->
        <script src="{{ URL::asset('assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

        <!--  Checkbox, Radio & Switch Plugins -->
        <script src="{{ URL::asset('assets/js/bootstrap-checkbox-radio-switch.js') }}"></script>

        <!--  Charts Plugin -->
        <script src="{{ URL::asset('assets/js/chartist.min.js') }}"></script>

        <!--  Notifications Plugin    -->
        <script src="{{ URL::asset('assets/js/bootstrap-notify.js') }}"></script>

        <!--  Google Maps Plugin    -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

        <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
        <script src="{{ URL::asset('assets/js/light-bootstrap-dashboard.js') }}"></script>

        <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
        <script src="{{ URL::asset('assets/js/demo.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function(){

                demo.initChartist();

            });
        </script>

    </body>
</html>