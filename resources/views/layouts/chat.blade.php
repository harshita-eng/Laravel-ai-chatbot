<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel AI Chatbot</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body class="bg-gray-100">

<div class="flex h-screen overflow-hidden">

    {{-- Sidebar --}}
    @include('components.sidebar')

    {{-- Main Content --}}
    <div class="flex flex-1 flex-col overflow-hidden">

        @include('components.navbar')

        <main class="flex-1 overflow-y-auto">

            @yield('content')

        </main>

    </div>

</div>

</body>
</html>