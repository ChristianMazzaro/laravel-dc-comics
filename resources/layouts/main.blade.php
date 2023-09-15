<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/js/app.js')
        @include('partials.head_imports') 

        <title>
            @yield('page_title')
        </title>
    </head>
    <body>

        @include('partials.main_header')

        <main>
            @yield('main_content')
        </main>

        @include('partials.body_imports')
    </body>
</html>