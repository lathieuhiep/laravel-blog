@extends('admin.layouts.master')

@section('title', 'User Create')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/tpl-users.css') }}">
@endpush

@section('bodyClass', 'tpl-users')

@section('content')
    <h1 class="mt-4">{{ __('Thêm mới') }}</h1>

    @if(session('errors'))
        <p class="error mb-4">
            {{ session('errors')->first() }}
        </p>
    @endif


    <form class="form-user mt-5" method="POST" action="{{ route('admin.user.store') }}">
        @csrf
        @include('admin.user.form')
    </form>
@endsection
