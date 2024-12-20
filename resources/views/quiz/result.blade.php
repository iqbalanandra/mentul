<x-layout>
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-xl max-w-lg w-full transform transition duration-500 hover:scale-105">
            <h2 class="text-3xl font-extrabold text-center text-indigo-800 mb-6">Hasil Diagnosis</h2>
            @if (empty($hasilDiagnosis))
                <p class="text-gray-700 text-center text-lg">Tidak ditemukan penyakit yang sesuai dengan gejala yang Anda pilih.</p>
            @else
                <ul class="space-y-6">
                    @foreach ($hasilDiagnosis as $hasil)
                        <li class="p-6 border border-gray-200 rounded-lg shadow-lg transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                            <h3 class="text-xl font-bold text-indigo-900">{{ $hasil['penyakit'] }}</h3>
                            <p class="text-sm text-gray-600 font-semibold mb-2">Kepercayaan: <span class="font-bold text-blue-500">{{ number_format($hasil['cf'], 2, ',', '.') }}%</span></p>
                            <p class="text-gray-500 font-semibold leading-relaxed">{{ $hasil['deskripsi'] }}</p>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</x-layout>
