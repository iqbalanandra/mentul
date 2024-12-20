<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Sistem Diagnosis Kesehatan Mental</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full">
    <!-- Include Navbar from components -->
    @include('components.navbar')

    <!-- Konten utama -->
    <main class="bg-gray-50 py-16">
        <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                 <div class="px-6 py-8 sm:p-10">
                    <h2 class="text-4xl font-extrabold text-gray-800 mb-8 text-center">Tentang Sistem Diagnosis Kesehatan Mental</h2>
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        Sistem Diagnosis Kesehatan Mental adalah aplikasi berbasis web yang dirancang untuk membantu 
                        pengguna memahami kondisi kesehatan mental mereka berdasarkan gejala yang mereka alami. 
                        Sistem ini menggunakan pendekatan sistem pakar yang memanfaatkan aturan-aturan logika dan 
                        data dari ahli di bidang kesehatan mental. Tujuannya adalah untuk memberikan panduan awal 
                        dan membantu pengguna mendapatkan rekomendasi untuk langkah-langkah lebih lanjut seperti 
                        konsultasi dengan profesional kesehatan mental.
                    </p>

                    <h3 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">Keunggulan Sistem</h3>
                    <ul class="list-disc list-inside text-gray-600 space-y-3 text-lg">
                        <li>Memberikan diagnosis awal berbasis gejala.</li>
                        <li>Menyediakan rekomendasi untuk tindakan lebih lanjut.</li>
                        <li>Memiliki antarmuka yang ramah pengguna.</li>
                        <li>Dikembangkan dengan masukan dari profesional kesehatan mental.</li>
                    </ul>

                    <h3 class="text-2xl font-semibold text-gray-800 mt-8 mb-4">Tim Pengembang</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="bg-white rounded-lg shadow-xl p-6 text-center">
                            <img class="h-24 w-24 mx-auto rounded-full border-4 border-blue-500" src="{{ asset('jessen.png') }}" alt="Jessen">
                            <h4 class="mt-4 font-bold text-gray-800 text-xl">Jessen Ramadeksa Allen</h4>
                            <p class="text-sm text-gray-600">Frontend Developer</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-xl p-6 text-center">
                            <img class="h-24 w-24 mx-auto rounded-full border-4 border-blue-500" src="{{ asset('iqbal.JPG') }}" alt="Iqbal">
                            <h4 class="mt-4 font-bold text-gray-800 text-xl">Muhammad Iqbal Anandra</h4>
                            <p class="text-sm text-gray-600">Backend Developer</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-xl p-6 text-center">
                            <img class="h-24 w-24 mx-auto rounded-full border-4 border-blue-500" src="{{ asset('elsa.png') }}" alt="Elsa">
                            <h4 class="mt-4 font-bold text-gray-800 text-xl">Elsa Dwi Agresty</h4>
                            <p class="text-sm text-gray-600">UI/UX Designer</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-xl p-6 text-center">
                            <img class="h-24 w-24 mx-auto rounded-full border-4 border-blue-500" src="{{ asset('vitto.png') }}" alt="Vitto">
                            <h4 class="mt-4 font-bold text-gray-800 text-xl">Nicholas Vitto Adrianto</h4>
                            <p class="text-sm text-gray-600">Project Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
