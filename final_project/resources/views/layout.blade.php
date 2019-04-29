<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield("title", "My Web Page")</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <a href="/"> Home </a> | <a href="/about"> About </a> | <a href="/contact"> Contact </a>
        @yield("heading")
        @yield("content")
    </body>
</html>
