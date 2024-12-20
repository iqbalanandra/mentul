<x-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-lg w-full">
            <h2 class="text-2xl font-bold mb-4">Hasil Diagnosis</h2>
            @if (empty($hasilDiagnosis))
                <p class="text-gray-700">Tidak ditemukan penyakit yang sesuai dengan gejala yang Anda pilih.</p>
            @else
                <ul class="space-y-4">
                    @foreach ($hasilDiagnosis as $hasil)
                        <li class="p-4 border rounded-lg shadow-sm">
                            <h3 class="text-lg font-bold">{{ $hasil['penyakit'] }}</h3>
                            <p class="text-gray-600">Kepercayaan: {{ number_format($hasil['cf'] * 100, 2, ',', '.') }}%</p>
                            <p class="text-gray-500">{{ $hasil['deskripsi'] }}</p>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</x-layout>
