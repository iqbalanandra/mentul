<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Sistem Diagnosis Kesehatan Mental</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</head>

<body class="h-full">
    <!-- Include Navbar from components -->
    @include('components.navbar')

    <!-- Konten utama -->
    <main class="bg-gray-50 py-16">
        <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
            <div class="bg-blue-900 shadow-lg rounded-lg overflow-hidden">
                <div class="px-6 py-10 sm:p-12">
                    <h2 class="text-4xl font-extrabold text-white mb-10 text-center tracking-wide" id="title">Tentang Sistem Diagnosis Kesehatan Mental</h2>
                    <p class="text-lg text-white leading-relaxed mb-8" id="description">
                        Sistem Diagnosis Kesehatan Mental adalah aplikasi berbasis web yang dirancang untuk membantu 
                        pengguna memahami kondisi kesehatan mental mereka berdasarkan gejala yang mereka alami. 
                        Sistem ini menggunakan pendekatan sistem pakar yang memanfaatkan aturan-aturan logika dan 
                        data dari ahli di bidang kesehatan mental. Tujuannya adalah untuk memberikan panduan awal 
                        dan membantu pengguna mendapatkan rekomendasi untuk langkah-langkah lebih lanjut seperti 
                        konsultasi dengan profesional kesehatan mental.
                    </p>

                    <h3 class="text-2xl font-semibold text-white mt-10 mb-6">Keunggulan Sistem</h3>
                    <ul class="list-disc list-inside text-white space-y-4 text-lg pl-4" id="features">
                        <li><span class="font-medium text-yellow-300">Diagnosis awal:</span> Memberikan diagnosis awal berbasis gejala.</li>
                        <li><span class="font-medium text-yellow-300">Rekomendasi lanjut:</span> Menyediakan rekomendasi untuk tindakan lebih lanjut.</li>
                        <li><span class="font-medium text-yellow-300">Antarmuka ramah pengguna:</span> Memiliki antarmuka yang intuitif dan mudah digunakan.</li>
                        <li><span class="font-medium text-yellow-300">Dukungan profesional:</span> Dikembangkan dengan masukan dari profesional kesehatan mental.</li>
                    </ul>

                    <h3 class="text-2xl font-semibold text-white mt-12 mb-6">Tim Pengembang</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10" id="team">
                        <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
                            <img class="h-24 w-24 mx-auto rounded-full border-4 border-blue-500" src="{{ asset('jessen.png') }}" alt="Jessen">
                            <h4 class="mt-4 font-bold text-gray-800 text-xl">Jessen Ramadeksa Allen</h4>
                            <p class="text-sm text-gray-600">Frontend Developer</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
                            <img class="h-24 w-24 mx-auto rounded-full border-4 border-blue-500" src="{{ asset('iqbal.JPG') }}" alt="Iqbal">
                            <h4 class="mt-4 font-bold text-gray-800 text-xl">Muhammad Iqbal Anandra</h4>
                            <p class="text-sm text-gray-600">Backend Developer</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
                            <img class="h-24 w-24 mx-auto rounded-full border-4 border-blue-500" src="{{ asset('elsa.png') }}" alt="Elsa">
                            <h4 class="mt-4 font-bold text-gray-800 text-xl">Elsa Dwi Agresty</h4>
                            <p class="text-sm text-gray-600">UI/UX Designer</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
                            <img class="h-24 w-24 mx-auto rounded-full border-4 border-blue-500" src="{{ asset('vitto.png') }}" alt="Vitto">
                            <h4 class="mt-4 font-bold text-gray-800 text-xl">Nicholas Vitto Adrianto</h4>
                            <p class="text-sm text-gray-600">Project Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Animasi untuk elemen judul dan deskripsi
        gsap.from("#title", { duration: 1, y: -50, opacity: 0, ease: "bounce" });
        gsap.from("#description", { duration: 1.2, x: -100, opacity: 0, delay: 0.5, ease: "power2.out" });

        // Animasi untuk daftar fitur
        gsap.from("#features li", {
            duration: 1, 
            x: -50, 
            opacity: 0, 
            stagger: 0.3, 
            delay: 1,
            ease: "power3.out"
        });

        // Animasi untuk tim pengembang
        gsap.from("#team > div", {
            duration: 1, 
            scale: 0.8, 
            opacity: 0, 
            stagger: 0.2, 
            delay: 1.5, 
            ease: "elastic"
        });
    </script>
</body>

</html>
