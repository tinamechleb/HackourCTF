<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #353535;
                color: #ffffff;
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
                right: 15px;
                top: 0;
                display: inline-flex;
                align-items: center;
                height: 66px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ffffff;
                padding: 6px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .register-button {
                border: 2px solid #ffffff;
                border-radius: 5px;
                margin-left: 5px;
            }

            .links > a:hover {
                color: #007D18;
                border-bottom: 3px solid #007D18;
            }

            .register-button:hover {
                border: 2px solid #007D18;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .submitflag-card {
                background-color: #262626;
            }

            .submitflag-label {
                font-size: 35px !important;
                padding: 15px;
            }

            .submitflag-grid {
                display: grid;
            }

            .submitflag-input {
                margin: 10px 50px;
                font-family: 'Nunito', sans-serif;
            }

            .submitflag-button {
                border: 2px solid #007D18;
                border-radius: 5px;
                padding: 8px 18px;
                margin: 20px 140px;
                background-color: #007D18;
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: bold;
            }

            .submitflag-button:hover {
                border: 2px solid #005110;
                border-radius: 5px;
                padding: 8px 18px;
                margin: 20px 140px;
                background-color: #005110;
                color: #ffffff;
            }

            .flag-invalid-feedback {
                font-size: 20%;
                color: #e3342f;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                <a href="{{url('/submitflag') }}">Submit a Flag</a>
                <a href="{{url('/') }}">Home</a>
                <a href="{{url('/play') }}">Play</a>
                <a href="{{url('/about') }}">About</a>
                <a href="{{url('/faq') }}">FAQ</a>
                <a href="{{url('/contact') }}">Contact</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="register-button">Sign Up</a>
                        @endif
                    @endauth
                </div>
            @endif

            @yield('page')

        </div>
    </body>
</html>
