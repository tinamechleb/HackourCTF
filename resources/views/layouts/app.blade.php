<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&family=Nova+Mono&display=swap" rel="stylesheet">         <!-- Styles -->


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
            html, body {
                background-color: #313131;
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

            .links > a, .navbar-light .navbar-nav .nav-link{
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

            .links > a:hover, .links > a:active, .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:active {
                color: #007D18 !important;
                border-bottom: 3px solid #007D18;
            }

            .register-button:hover {
                border: 2px solid #007D18;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .card {
                background-color: #262626;
            }

            .bg-white {
                background-color: #262626 !important;
            }
            .container {
                height: 50px;
            }
            footer{
                margin-top: 25%;
                background-color: #262626;
                text-align: center;
                padding: 2%;
                font-family: 'Nova Mono', monospace;
            }
            footer a {
                text-decoration: none;
                color: #ffffff;
            }
            footer a:hover {
                text-decoration: underline;
                color: #119308;
            }
            .footer-grid {
                display: grid;
                grid-template-columns: 33.33% 33.33% 33.33%;
            }
            .footer-column {
                padding: 9%;
            }
            .footer-column h2 {
                color: #119308;
                font-weight: bold;
            }
            .join-now-text {
                padding-bottom: 6.5%;
            }
            .start-hacking-button {
                border: 2px solid #119308;
                border-radius: 7px;
                padding: 10px;
                font-family: 'Gruppo', 'Nova Mono', monospace;
                font-size: 18px
            }
            .start-hacking-button:hover {
                background-color: #119308;
                color: #ffffff;
                text-decoration: none;
                font-size: 20px;
            }
            .terms-and-conditions {
                padding-top: 10px;
            }
        </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'HackoutCTF') }} -->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <div class="top-right links">
                        <a href="{{url('/submitflag') }}">Submit a Flag</a>
                        <a href="{{url('/') }}">Home</a>
                        <a href="{{url('/play') }}">Play</a>
                        <a href="{{url('/about') }}">About</a>
                        <a href="{{url('/faq') }}">FAQ</a>
                        <a href="{{url('/contact') }}">Contact</a>
                    
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link register-button" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
        <footer>
            <div>
                <img src="/img/hackourCTF-logo.svg" alt="hackour ctf logo"/>
            </div>
            <div class="footer-grid">
                <div class="footer-column footer-column-about">
                    <h2>About Hackour CTF</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio tristique neque gravida cursus praesent. Nulla gravida nunc tristique eget mattis orci. Vitae accumsan tellus iaculis id a amet cursus auctor.</p>
                </div>
                <div class="footer-column footer-column-join">
                    <h2>Join Now</h2>
                    <p class="join-now-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio tristique neque praesent. </p>
                    <a href="{{ route('register') }}" class="start-hacking-button">Start Hacking</a>
                </div>
                <div class="footer-column footer-column-contact">
                    <h2>Contact</h2>
                    <p>hackour_ctf@protonmail.com</p>
                    <p>tristique neque gravida cursus praesent. Nulla gravida nunc tristique eget mattis orci. Vitae accumsan tellus iaculis id a amet cursus auctor.</p>
                </div>
            </div>
            <div>
                <div class="copyrights">Copyright © Hackour CTF 2020<div/>
                <div class="terms-and-conditions"><a href="https://www.termsandconditionsgenerator.com/live.php?token=ROi0YyPYoXOYIA8STQ9V6QJBhZ2c6A7D">Terms & Conditions</a> | <a href="https://www.privacypolicygenerator.info/live.php?token=f9LOSF5m7UIAGj3B8Ge72PigJhk0GnHn">Privacy Policy</a></div>
            <div>
        </footer>
</body>
</html>
