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
        </style>
    </head>
    <body>
        <h2>Welcome to <span>Game 1</span>, have a look around...</h2>
    </body>
</html>
