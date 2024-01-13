<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link rel="stylesheet" href="{{ asset('assets/admin/css/login-form.css') }}">
</head>
<body>

<div class="sign-in">
    <h2 class="heading">SIGN IN</h2>

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf

        <label>Email:
            <input type="email" name="email" value="{{ old('email') }}" required>
        </label>

        <label>Password:
            <input type="password" name="password" required>
        </label>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
