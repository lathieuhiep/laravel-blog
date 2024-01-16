<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <title>@yield('title', 'Your Website')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/main.css') }}">
    <!-- Add your css here -->
    @stack('css')
</head>
<body class="tpl-default @yield('bodyClass', '')">

<!-- Content section that will be overridden by child views -->
@yield('content')

<!-- Add your JS scripts here -->
@stack('js')
</body>
</html>
