<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Flawless Box | @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="{{ asset('css/modules/navbar.css') }}" rel="stylesheet">
    @yield('css-scripts')
</head>

<body>
    @include('includes.scroll-up')

    <header>
        @yield('headers')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</body>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/scroll-up.js') }}" defer></script>

@yield('js-scripts')
</html>
