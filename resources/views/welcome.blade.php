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
                        <div>
                            <input type="checkbox" name="gejala[]" value="{{ $gejala->kode }}" id="gejala_{{ $gejala->kode }}">
                            <label for="gejala_{{ $gejala->kode }}">{{ $gejala->deskripsi }}</label>

                            <select name="cf_user[{{ $gejala->kode }}]" disabled> 
                                <option value="1">Pasti</option>
                                <option value="0.8">Hampir Pasti</option>
                                <option value="0.6">Kemungkinan Besar</option>
                                <option value="0.4">Mungkin</option>
                                <option value="0.2">Tidak Yakin</option>
                            </select>
                        </div>

                        <script>
                            document.getElementById("gejala_{{ $gejala->kode }}").addEventListener("change", function() {
                                let selectElement = this.closest('div').querySelector('select');
                                selectElement.disabled = !this.checked;
                            });
                        </script>

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
