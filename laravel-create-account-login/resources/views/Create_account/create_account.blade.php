
@extends('Templates/master')

@section('title', 'Home')

@section('links')
<link rel="stylesheet" href="assets/css/Create_account/create_account.css">
@endsection

@section('content')
<main>
    <form action="#" method="post">
        
        <fieldset>
            <legend>Name</legend>
            <input type="text" name="name" placeholder="Name">
        </fieldset>

        <fieldset>
            <legend>Name</legend>
            <input type="text" name="username" placeholder="Username">
        </fieldset>
        
        <fieldset>
            <legend>Name</legend>
            <input type="email" name="email" placeholder="Email">
        </fieldset>
        
        <fieldset>
            <legend>Name</legend>
            <input type="password" name="password" placeholder="Password">
        </fieldset>

        <button type="submit">Create Account</button>
    </form>
</main>
@endsection
