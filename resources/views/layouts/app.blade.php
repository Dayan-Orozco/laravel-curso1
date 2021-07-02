<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
</head>
<body>
    <div id="app">
        <header>
            @include('layouts.partials.header')
        </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
