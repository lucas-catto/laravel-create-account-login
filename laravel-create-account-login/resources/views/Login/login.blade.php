
@extends('Templates/master')

@section('title', 'Create Account')

@section('links')
<link rel="stylesheet" href="assets/css/Login_create_account/login_create_account.css">
@endsection

@section('content')
<main>
    <form action="#" method="post">
        
        <fieldset>
            <legend>Email</legend>
            <input type="email" name="email" placeholder="Email">
        </fieldset>
        
        <fieldset>
            <legend>Password</legend>
            <input type="password" name="password" placeholder="Password">
        </fieldset>

        <button type="submit">Login</button>
    </form>
</main>
@endsection
