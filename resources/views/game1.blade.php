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
                color: #262626;
                font-family: 'Nova Mono', monospace;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background: url('/img/game1-background.svg')
            }
            h2 span{
                color: #119308;
            }
            .submitflag-card {
                display: grid;
                justify-content: center;
                font-family: 'Gruppo', monospace;
                font-weight: bold;
            }

            .submitflag-label {
                font-size: 35px !important;
                padding: 15px;
                color: #ffffff;
                text-align: center;
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
                font-family: 'Gruppo', sans-serif;
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
                font-size: 15px;
                color: #e3342f;
                text-align: center;
            }
            .submitflag-box {
                width: 23em;
                position: fixed;
                bottom: 0;
                right: 0;
                background-color: #262626;
                box-shadow: -10px -10px 20px #888888;
                display: grid;
                justify-content: center;
                text-align: center;
                padding-bottom: 10px;
            }
            .submitflag-box a {
                color: #ffffff;
            }
            .submitflag-box a:hover {
                color: #007D18;
            }
        </style>
    </head>
    <body>
        <h2>Welcome to <span>Game 1</span>, have a look around...</h2>

        <div class="submitflag-box">
            <form action="{{ route('flag.submit') }}" method="POST" class="submitflag-card">
            {{ csrf_field() }}
                <label for="flag" class=" text-md-right submitflag-label">Found a $FLAG$?</label>

                <div class="submitflag-grid">
                    <input id="flag" type="text" class="submitflag-input" name="flag" placeholder="$FLAG$" autocomplete="off" required>
                    
                    @error('flag')
                        <span class="flag-invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button type="submit" class="submitflag-button">
                        {{ __('Submit') }}
                    </button>
                </div> 
            </form>
            <a href="/play">Play another game</a>
        </div>
    </body>
</html>
