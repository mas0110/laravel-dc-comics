<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite('resources/js/app.js')

    @yield('style')
</head>

<body>
    {{-- <header> --}}
        {{-- @include('components.header') --}}
    {{-- </header> --}}

    <main>
        @yield('main')
    </main>
</body>

</html>
