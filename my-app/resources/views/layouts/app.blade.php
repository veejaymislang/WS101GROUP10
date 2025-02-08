<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel Breeze') }}</title>

    <!-- Styles -->
    @vite(['resources/css/app.css']) <!-- If using Vite -->
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS CDN -->
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation -->
        <header class="bg-white shadow p-4">
            <a href="/" class="text-lg font-bold">Laravel Breeze</a>
        </header>

        <!-- Page Content -->
        <main class="flex-1 p-6">
            @yield('content')  <!-- Ensure this properly yields content -->
        </main>
    </div>
</body>
</html>
