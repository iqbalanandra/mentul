<x-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-indigo-900 to-gray-900">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg w-full">
            <h2 class="text-3xl font-bold text-indigo-800 mb-6 text-center">
                Pertanyaan {{ $index + 1 }} / 28
            </h2>
            <p class="text-gray-700 text-lg text-center mb-8 leading-relaxed">
                Apakah Anda mengalami gejala berikut? <br> <strong>{{ $gejala->deskripsi }}</strong>
            </p>

            <form method="POST" action="{{ route('quiz.answer') }}" class="flex flex-col space-y-4">
                @csrf
                <input type="hidden" name="gejala_kode" value="{{ $gejala->kode }}">
                <input type="hidden" name="next_index" value="{{ $index + 1 }}">

                <!-- Tombol Jawaban -->
                <button type="submit" name="cf_user" value="1"
                    class="w-full px-6 py-3 bg-green-600 text-white font-bold text-lg rounded-lg shadow-md hover:bg-green-500 transition">
                    Ya
                </button>

                <button type="submit" name="cf_user" value="0"
                    class="w-full px-6 py-3 bg-red-600 text-white font-bold text-lg rounded-lg shadow-md hover:bg-red-500 transition">
                    Tidak
                </button>
            </form>
        </div>
    </div>
</x-layout>
