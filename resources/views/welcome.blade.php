<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite('/resources/css/app.css')
        <!-- Styles -->
    </head>
    <body class="antialiased">
        <div id="app">
            <h1>hi?</h1>
        </div>
    @vite('resources/js/app.js')
    </body>
    <script>
        (function (){
        landing.create_app('#app', {
            test: 'test'
        })
        })();
    </script>
</html>
