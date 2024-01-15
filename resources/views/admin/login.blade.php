<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/login-form.css') }}">
</head>
<body>

<div class="sign-in">
    <h2 class="heading">SIGN IN</h2>
    <p class="error">{{ session('message') }}</p>

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf

        <div class="group-control">
            <input class="form-control" type="email" name="email" value="{{ old('email') }}" aria-label="" required placeholder="Email">
        </div>

        <div class="group-control">
            <input class="form-control" type="password" name="password" aria-label="" required placeholder="Password">
        </div>

        <a class="link" href="#">
            Forgot Password
        </a>

        <div class="group-control">
            <button type="submit" class="btn btn-submit">Login</button>
        </div>
    </form>
</div>

</body>
</html>
