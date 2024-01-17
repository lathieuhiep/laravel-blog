@extends('admin.auth.layouts.master')

@section('title', 'Login')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/login-form.css') }}">
@endpush

@section('bodyClass', 'tpl-login')

@section('content')
    <div class="sign-in">
        <h2 class="heading">{{ __('Đăng nhập') }}</h2>

        @if(session('error'))
            <div class="error">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <div class="group-control">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}" required autocomplete="email" autofocus aria-label="">

                @error('email')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>

            <div class="group-control">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Mật khẩu') }}" required autocomplete="current-password" aria-label="">

                @error('password')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
                @enderror
            </div>

            <div class="group-control">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Tự động đăng nhập') }}
                    </label>
                </div>
            </div>

            <div class="group-control">
                <button type="submit" class="btn btn-submit">
                    {{ __('Đăng nhập') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
@endsection
