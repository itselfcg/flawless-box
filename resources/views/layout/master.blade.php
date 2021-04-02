<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Flawless Box | @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('css/modules/navbar.css') }}" rel="stylesheet">
    @yield('css-scripts')
</head>

<body>
    <header>
        @include('includes.header')
    </header>

    @include('includes.scroll-up')


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
