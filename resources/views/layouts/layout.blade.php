<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Gruppo&family=Nova+Mono&display=swap" rel="stylesheet">         <!-- Styles -->
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
            footer{
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
