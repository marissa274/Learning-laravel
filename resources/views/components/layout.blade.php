<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
{{--    <link rel="stylesheet" href="{{asset("stylesheets/posts/create.css")}}">--}}
    @stack("stylesheets")
</head>
<body>
<header>
    <ul>
        <li>
            <a href="/">Acceuil</a>
        </li>
        <li>
            <a href="/posts">Publications</a>
        </li>
        <li>
            <a href="/posts/create"> Creer une publication</a>
        </li>
    </ul>
</header>
<main>
    {{ $slot }}
</main>
<footer>Footer</footer>
</body>
</html>
