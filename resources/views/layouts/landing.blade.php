<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel')}}</title>

    <!-- Fonts -->
     <link rel="preeconnect" href="https://fonts.bunny.net">
     
     <!-- Script -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">

        @include('components.landing-header')

        <main>
            {{ $slot }}
        </main>
    </div>

    @include('sweetalert::alert')
</body>
</html>