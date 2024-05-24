@extends('user.dashboard.layouts.main')

@section('container')
    <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Welcome Back, {{ auth()->user()->nama }}</h1>
@endsection