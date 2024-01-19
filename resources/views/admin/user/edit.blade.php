@extends('admin.layouts.master')

@section('title', 'User Edit')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/tpl-users.css') }}">
@endpush

@section('bodyClass', 'tpl-users')

@section('content')
    <h1 class="mt-4">{{ __('Edit') }}</h1>

    @if( session('errors') && is_string($errors)  )
        <p class="error mb-4">
            {{ session('errors') }}
        </p>
    @endif

    <form class="form-user mt-5" action="{{ route('admin.user.update', ['user' => $id]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="item-control">
            <label for="name" class="form-label">
                Tên <span class="required">(*)</span>
            </label>

            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') ?? $user->name }}" required>

            @if ($errors->has('name'))
                <p class="error">
                    {{ $errors->first('name') }}
                </p>
            @endif
        </div>

        <div class="item-control">
            <label for="email" class="form-label">Email</label>

            <input id="email" class="form-control" type="email" name="email" value="{{ $user->email }}" readonly>
        </div>

        @if( Auth::id() != $id )
            <div class="item-control">
                <label for="roles" class="form-label">
                    Quyền <span class="required">(*)</span>
                </label>

                <select id="roles" class="form-select form-control" name="roles">
                    <option value="" {{ empty($user->userRole) ? 'selected' : '' }} selected>Chọn quyền</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}" {{ $user->userRole && $user->userRole->role_id === $role->id ? 'selected' : '' }}>{{ $role->display_name }}</option>
                    @endforeach
                </select>

                @if($errors->has('roles'))
                    <p class="error">{{ $errors->first('roles') }}</p>
                @endif
            </div>
        @endif

        <div class="item-control">
            <button type="submit" class="btn btn-primary">Sửa</button>
        </div>
    </form>
@endsection
