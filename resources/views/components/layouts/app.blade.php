@props(['title' => null, 'description' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ? $title.' · ' : '' }}{{ config('app.name', 'Alineo') }}</title>
        <meta name="description" content="{{ $description ?? 'Alineo: planificación digital e impresión de alineadores para clínicas dentales y ortodoncistas.' }}">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex min-h-screen flex-col bg-white font-sans text-slate-700 antialiased">
        @include('partials.header')

        <main class="flex-1">
            {{ $slot }}
        </main>

        @include('partials.footer')
    </body>
</html>
