
@extends('Templates/master')

@section('title', 'Home')

@section('links')
<link rel="stylesheet" href="assets/css/Home/home.css">
@endsection

@section('content')
<main>
    <a href="{{ route('home.create_account') }}">Create Account</a>
    <a href="{{ route('home.login') }}">Login</a>
</main>
@endsection
