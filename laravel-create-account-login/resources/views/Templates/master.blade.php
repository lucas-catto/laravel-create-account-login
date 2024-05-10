<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="./assets/css/Templates/master.css">
        @yield('links')
    </head>
    <body>

        <header>
            <a href="{{ route('home.home') }}">
                <h1>Home</h1>
            </a>
        </header>

        @yield('content')

        @if (empty($__env->yieldContent('footer')))
            <footer>
                <p>By <a href="https://github.com/lucas-catto/">lucas-catto</a></p>
            </footer>
        @else
            @yield('footer')
        @endif
    </body>
</html>
