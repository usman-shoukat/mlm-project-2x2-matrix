<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    <!-- Scripts -->


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="/css/style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="/css/font.css" type="text/css"/>
    <link href="/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="/js/jquery2.0.3.min.js"></script>
    <script src="/js/modernizr.js"></script>
    <script src="/js/jquery.cookie.js"></script>
    <script src="/js/screenfull.js"></script>
    <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }



            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });
        });
    </script>
    <!-- charts -->
    <script src="/js/raphael-min.js"></script>
    <script src="/js/morris.js"></script>
    <link rel="stylesheet" href="/css/morris.css">
    <!-- //charts -->
    <!--skycons-icons-->
    <script src="/js/skycons.js"></script>
    <!--//skycons-icons-->

    @yield('css')
</head>

<body class="dashboard-page">
<script>
    var theme = $.cookie('protonTheme') || 'default';
    $('body').removeClass (function (index, css) {
        return (css.match (/\btheme-\S+/g) || []).join(' ');
    });
    if (theme !== 'default') $('body').addClass(theme);
</script>

<nav class="main-menu">
    <ul>
        <li>
            <a href="/home">
                <i class="fa fa-home nav_icon"></i>
                <span class="nav-text">
					Dashboard
					</span>
            </a>
        </li>
        <li class="has-subnav">
            <a href="{{ route('upliner') }}">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                <span class="nav-text">
					Upliner
				</span>

            </a>
        </li>
        @if(auth()->user()->is_admin  == 1)
        <li class="has-subnav">
            <a href="{{ route('token.create') }}">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                <span class="nav-text">
					Add User Token

				</span>

            </a>
        </li>
        @endif
        @if(auth()->user()->is_admin  == 1)
            <li class="has-subnav">
                <a href="{{ route('all.user') }}">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                    <span class="nav-text">
					All Users

				</span>

                </a>
            </li>
        @endif


        <li class="has-subnav">
            <a href="{{ route('reward') }}">
                <i class="fa fa-file-text-o nav_icon"></i>
                <span class="nav-text">Rewards</span>

            </a>

        </li>
        <li>
            <a href="{{ route('wallet') }}">
                <i class="fa fa-bar-chart nav_icon"></i>
                <span class="nav-text">
						Wallet
					</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.create') }}">
                <i class="icon-font nav-icon"></i>
                <span class="nav-text">
					Add Members
					</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="icon-table nav-icon"></i>
                <span class="nav-text">
					Contact Us
					</span>
            </a>
        </li>
        <li>
            <a href="/change-password">
                <i class="fa fa-cogs nav-icon"></i>
                <span class="nav-text">
					Setting
					</span>
            </a>
        </li>
        <li>
            <a href="/down" >
                <i class="fa fa-download nav-icon"></i>


                <span class="nav-text">
					Joining Form
					</span>
            </a>
        </li>

</nav>

<section class="wrapper scrollable">
    <nav class="user-menu">
        <a href="javascript:;" class="main-menu-access">
            <i class="icon-proton-logo"></i>
            <i class="icon-reorder"></i>
        </a>
    </nav>
    <section class="title-bar">
        <div class="logo">
            <h1><a href="/home"><img src="/images/logo.png" width="50px" height="50px" alt="" /></a></h1>
        </div>


        <div class="header-right">
            <div class="profile_details_left">
                <div class="header-right-left">
                    <!--notifications of menu start -->
                    <ul class="nofitications-dropdown">
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge">0</span></a>
                            <ul class="dropdown-menu anti-dropdown-menu w3l-msg">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 0 new messages</h3>
                                    </div>
                                </li>
                                {{--<li><a href="#">
                                        <div class="user_img"><img src="/images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li class="odd"><a href="#">
                                        <div class="user_img"><img src="/images/2.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="/images/3.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>--}}
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all messages</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">0</span></a>
                            <ul class="dropdown-menu anti-dropdown-menu agile-notification">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 0 new notifications</h3>
                                    </div>
                                </li>
                               {{-- <li><a href="#">
                                        <div class="user_img"><img src="/images/2.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li class="odd"><a href="#">
                                        <div class="user_img"><img src="/images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="/images/3.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>--}}
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all notifications</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        {{--<li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
                            <ul class="dropdown-menu anti-dropdown-menu agile-task">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 8 pending tasks</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar yellow" style="width:40%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar green" style="width:90%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar red" style="width: 33%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar  blue" style="width: 80%;"></div>
                                        </div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all pending tasks</a>
                                    </div>
                                </li>
                            </ul>
                        </li>--}}
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="profile_details">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
{{--                                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>--}}
{{--                                <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>--}}
                                <li onclick="document.getElementById('logout-form').submit(); return false;"> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                <form method="post" action="{{ url('logout') }}" id="logout-form"> @csrf </form>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </section>
    @yield('content');
    <div class="clearfix"> </div>
    </div>
    </div>
    <div class="clearfix"> </div>
    </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <p>© 2020 Xhine Way . All Rights Reserved .  <a href="http://w3layouts.com/"></a></p>
    </div>
    <!-- //footer -->
</section>

<script src="/js/bootstrap.js"></script>
<script src="/js/proton.js"></script>
@yield('js')
</body>
</html>
