<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
         @vite('resources/js/app.js')
    </head>
    <body>
    <!--    <div class="container">
            <h1>Template Classe 89</h1>
            <img src="{{ Vite::asset('resources/img/pluto.webp') }}" alt="" srcset="">
        </div>
    -->
        @include('partials.header')
        <main>
            @yield('main')
        </main>
        @include('partials.footer')
    </body>
</html>
