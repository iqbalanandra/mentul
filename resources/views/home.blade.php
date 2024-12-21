<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentul</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
<x-layout>
    <div class=" min-h-screen flex items-center justify-center">
        <div class="container mx-auto px-8 py-12 bg-white rounded-lg shadow-2xl text-center">
            <h1 class="text-5xl font-bold text-indigo-800 mb-6">Selamat Datang di Sistem Diagnosis Kesehatan Mental Anak</h1>
            <p class="text-gray-700 text-lg leading-relaxed mb-8">
                Jawab beberapa pertanyaan sederhana mengenai gejala yang Anda rasakan untuk mendapatkan diagnosis awal
                yang akurat.
            </p>
            <a href="{{ route('quiz.start') }}"
               class="px-8 py-3 bg-indigo-700 text-white font-bold text-lg rounded-lg shadow-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
                Mulai Kuis Diagnosis
            </a>
        </div>
    </div>
</x-layout>
</body>
</html>
