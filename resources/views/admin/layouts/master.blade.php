<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- css fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/libs/fontawesome/css/fontawesome.css') }}">
    <!-- css template sb admin -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/admin.css') }}">
    <!-- css dashboard -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/dashboard.css') }}">
    <!-- add css -->
    @stack('css')
</head>
<body class="sb-nav-fixed">
<!-- Header -->
@include('admin.layouts.header')

<div id="layoutSidenav">
    <!-- Sidebar -->
    @include('admin.layouts.sidebar')

    <!-- Content -->
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                @yield('content')
            </div>
        </main>

        @include('admin.layouts.footer')
    </div>
</div>

<!-- Thêm các tài nguyên JavaScript cần thiết cho admin ở đây -->
<script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>
<!-- Add your JS scripts here -->
@stack('js')
</body>
</html>
