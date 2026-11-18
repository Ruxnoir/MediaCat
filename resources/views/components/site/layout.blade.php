@props(['title' => 'MediaCat'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#c9f0f2">

        <title>{{ $title }}</title>

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-mediacat-bg font-sans text-black antialiased">
        <x-site.navbar />

        {{ $slot }}

        <x-site.footer />
    </body>
</html>
