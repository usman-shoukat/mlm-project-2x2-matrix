<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Xhineway</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                z-index: 999999;
            }

            .content {
                text-align: center;
            }


            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 500;
                letter-spacing: 0.1rem;
                text-decoration: none;
                /* text-transform: uppercase; */
            }

            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: Arial;
                font-size: 17px;
            }

            #myVideo {
                position: fixed;
                right: 0;
                bottom: 0;
                min-width: 100%;
                min-height: 100%;
            }

            .content {
                position: fixed;
                bottom: 0;
                background: rgba(0, 0, 0, 0.5);
                color: #f1f1f1;
                width: 100%;
                padding: 20px;
            }

            #myBtn {
                width: 200px;
                font-size: 18px;
                padding: 10px;
                border: none;
                background: #000;
                color: #fff;
                cursor: pointer;
            }

            #myBtn:hover {
                background: #ddd;
                color: black;
            }
        </style>
    </head>
    <body>
    <div style="position: absolute;
    left: 10px;
    top: 0px;
    z-index: 999999">
        <a href="/"><img src="/images/xlogo.png" width="150"></a>
    </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                        <a href="{{ url('/home') }}">My Account</a>
                        <a href="{{ url('/logout') }}" onclick="document.getElementById('logout-form').submit(); return false;">Logout</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @else
                        <a href="{{ route('login') }}">Sign In</a>

                       {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif--}}
                    @endauth
                </div>
            @endif


                <video autoplay muted loop id="myVideo">
                    <source src="/images/Computer Keyboard - 3174.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>

                <div class="content">
                    <h1>Xhine Way</h1>
                    <p>A Product of Bitscoin (BTCx). A fastest Growing & Earning Platform where you Can Change your Life Style. A Platform where you Can Get Opportunities for Growing your wealth & Secure your future.</p>

                </div>
        </div>
    </body>
</html>
