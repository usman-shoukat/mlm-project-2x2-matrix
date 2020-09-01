<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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

    @yield('css')
</head>
<body class="signup-body">
<div class="agile-signup">

    <div class="content2">
        <div class="grids-heading gallery-heading signup-heading">
            <h2>Login</h2>
        </div>
        <form data-toggle="validator" novalidate="true" action="{{ url('login') }}" method="post">
            @csrf
            <input type="email" required name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}">
            <input type="password" required name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}">
            <input type="submit" class="register" value="Login">
        </form>
        <div class="signin-text">
            <div class="text-left">
                <p><a href="#"> Forgot Password? </a></p>
            </div>
{{--            <div class="text-right">--}}
{{--                <p><a href="signup.html"> Create New Account</a></p>--}}
{{--            </div>--}}
            <div class="clearfix"> </div>
        </div>

        <a href="index.html">Back To Home</a>
    </div>

    <!-- footer -->
    <div class="copyright">
        <p>© 2020 Xhine Way . All Rights Reserved . 
    </div>
    <!-- //footer -->

</div>
<script src="/js/validator.min.js"></script>
<script src="/js/bootstrap.js"></script>


<!-- input-forms -->
<script type="text/javascript" src="/js/valida.2.1.6.min.js"></script>
<script src="/js/proton.js"></script>
</body>
</html>
