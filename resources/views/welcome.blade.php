<x-layout>
    <div class="bg-gradient-to-b from-indigo-900 to-gray-900 min-h-screen flex items-center justify-center">
        <div class="container mx-auto px-8 py-12 bg-white rounded-lg shadow-2xl">
            <h1 class="text-5xl font-bold text-indigo-800 text-center mb-6">Diagnosis Penyakit Mental</h1>
            <p class="text-gray-700 text-center mb-8 leading-relaxed">
                Pilih gejala yang Anda rasakan untuk mendapatkan diagnosis awal secara akurat.
            </p>
            <form method="POST" action="/diagnosis" class="space-y-8">
                @csrf
                @if ($gejalas->isEmpty())
                    <div class="text-center text-gray-500">
                        <p>Tidak ada gejala yang tersedia saat ini.</p>
                    </div>
                @else
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($gejalas as $gejala)
                            <div class="flex items-center space-x-4 p-4 bg-gray-100 rounded-lg shadow hover:shadow-md transition">
                                <input 
                                    type="checkbox" 
                                    name="gejala[]" 
                                    value="{{ $gejala->kode }}" 
                                    id="gejala-{{ $gejala->kode }}" 
                                    class="h-5 w-5 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                <label for="gejala-{{ $gejala->kode }}" class="text-gray-800 font-medium">
                                    {{ $gejala->deskripsi }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-8">
                        {{ $gejalas->links('pagination::tailwind') }}
                    </div>
                @endif
                <div class="text-center">
                    <button 
                        type="submit" 
                        class="px-8 py-3 bg-indigo-700 text-white font-bold text-lg rounded-lg shadow-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
                        Diagnosis
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
