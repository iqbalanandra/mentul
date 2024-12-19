<x-layout>
    <div class=" min-h-screen flex items-center justify-center">
        <div class="container mx-auto px-8 py-12 bg-white rounded-lg shadow-2xl text-center">
            <h1 class="text-5xl font-bold text-indigo-800 mb-6">Selamat Datang di Sistem Diagnosis Kesehatan Mental</h1>
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
