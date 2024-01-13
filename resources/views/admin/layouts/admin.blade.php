<!-- resources/views/layouts/admin.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <!-- Thêm các tài nguyên CSS cần thiết cho admin ở đây -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/dashboard.css') }}">
</head>
<body>
<div id="app">
    <!-- Header -->
    <header>
        <!-- Đặt nội dung header ở đây -->
        @yield('header')
    </header>

    <!-- Sidebar -->
    <aside>
        <!-- Đặt nội dung sidebar ở đây -->
        @yield('sidebar')
    </aside>

    <!-- Content -->
    <main>
        <!-- Đặt nội dung chính của trang admin ở đây -->
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <!-- Đặt nội dung footer ở đây -->
        @yield('footer')
    </footer>
</div>

<!-- Thêm các tài nguyên JavaScript cần thiết cho admin ở đây -->
<script src="{{ asset('assets/admin/js/dashboard.js') }}"></script>
</body>
</html>
