@extends('admin.layouts.master')

@section('title', 'User')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/simple-datatables/simple-datatables.min.css') }}">
@endpush

@section('bodyClass', 'tpl-users')

@section('content')
    <div class="top-heading mt-4 d-flex align-items-center">
        <h1 class="txt me-3">User</h1>

        <a class="link" href="{{ route('admin.user.create') }}">
            {{ __('Thêm User') }}
        </a>
    </div>

    <table id="table-users" class="table-users">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->roles->count() > 0 ? $user->roles[0]->name : '' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@push('js')
    <script src="{{ asset('assets/admin/libs/simple-datatables/simple-datatables.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/admin/js/user.js') }}" crossorigin="anonymous"></script>
@endpush
