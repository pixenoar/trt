<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">

        <meta property="og:title" content="@yield('title')">
        <meta property="og:image" content="{{ asset('img/todo-reformas-tenerife.jpg') }}">
        <meta name="og:description" content="@yield('description')">
        <meta property="og:site_name" content="Todo Reformas Tenerife">
        <meta property="og:url" content="https://todoreformastenerife.com">
        <meta property="og:type" content="website">

        <meta name="format-detection" content="telephone=no">

        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        @livewireStyles

        <script>
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-430837-15']);
            _gaq.push(['_trackPageview']);

            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>

    </head>
    <body>
        @yield('contenido')
        @livewire('site.politicas')
        @livewireScripts
    </body>
</html>