<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
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

    </head>
    <body>
        @yield('contenido')
        @livewireScripts
    </body>
</html>