<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentul</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <!-- Navbar khusus dokter -->
        <x-navbar></x-navbar>

        <!-- Konten utama -->
        <main class="bg-gradient-to-b from-indigo-900 to-gray-900">
            <div class="mx-auto max-w-7xl px-4 py-1 sm:px-6 lg:px-8">
                {{$slot}}
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
