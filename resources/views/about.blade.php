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
    <main class="bg-blue-900 py-16">
        <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10">
            <!-- Tentang Sistem Section -->
            <div class="bg-white p-8 rounded-lg shadow-xl mb-8 transform transition duration-500 hover:scale-105">
                <h2 class="text-3xl font-extrabold text-center text-indigo-800 mb-6">Tentang Sistem Diagnosis Kesehatan Mental</h2>
                <p class="text-lg text-gray-700 text-center mb-8" id="description">
                    Sistem Diagnosis Kesehatan Mental adalah aplikasi berbasis web yang dirancang untuk membantu 
                    pengguna memahami kondisi kesehatan mental mereka berdasarkan gejala yang mereka alami. 
                    Sistem ini menggunakan pendekatan sistem pakar yang memanfaatkan aturan-aturan logika dan 
                    data dari ahli di bidang kesehatan mental. Tujuannya adalah untuk memberikan panduan awal 
                    dan membantu pengguna mendapatkan rekomendasi untuk langkah-langkah lebih lanjut seperti 
                    konsultasi dengan profesional kesehatan mental.
                </p>
            </div>

            <!-- Keunggulan Sistem Section -->
            <div class="bg-gray-100 p-8 rounded-lg shadow-xl mb-8 transform transition duration-500 hover:scale-105">
                <h3 class="text-2xl font-extrabold text-indigo-900 mb-6">Keunggulan Sistem</h3>
                <ul class="space-y-4 text-gray-700 text-lg">
                    <li><span class="font-medium text-blue-600">Diagnosis awal:</span> Memberikan diagnosis awal berbasis gejala.</li>
                    <li><span class="font-medium text-blue-600">Antarmuka ramah pengguna:</span> Memiliki antarmuka yang intuitif dan mudah digunakan.</li>
                    <li><span class="font-medium text-blue-600">Dukungan profesional:</span> Dikembangkan dengan masukan dari profesional kesehatan mental.</li>
                </ul>
            </div>

            <!-- Tim Pengembang Section -->
            <div class="bg-gray-50 p-8 rounded-lg shadow-xl transform transition duration-500 hover:scale-105">
                <h3 class="text-2xl font-extrabold text-indigo-900 text-center mt-10 mb-6">TIM PENGEMBANG</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
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

    </main>

    <script>
        // Animasi untuk elemen judul dan deskripsi
        gsap.from("#title", {
            duration: 1.5, 
            y: -50, 
            opacity: 0, 
            ease: "power2.out"
        });
    
        gsap.from("#description", {
            duration: 1.5, 
            x: -100, 
            opacity: 0, 
            delay: 0.5, 
            ease: "power2.out"
        });
    
        // Animasi untuk daftar fitur
        gsap.from("#features li", {
            duration: 1.2, 
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
            ease: "elastic.out(1, 0.5)"
        });
    </script>
    
</body>

</html>
