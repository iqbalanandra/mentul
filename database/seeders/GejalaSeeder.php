<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gejala')->insert([
            ['kode' => 'G001', 'deskripsi' => 'Fobia pada hal yang spesifik atau ketakutan akan suatu benda tertentu'],
            ['kode' => 'G002', 'deskripsi' => 'Mengalami kecemasan yang berlebihan dalam setiap situasi'],
            ['kode' => 'G003', 'deskripsi' => 'Nyeri otot'],
            ['kode' => 'G004', 'deskripsi' => 'Sering merasa terkucilkan hingga berpikiran hal buruk akan terjadi'],
            ['kode' => 'G005', 'deskripsi' => 'Sulit tidur'],
            ['kode' => 'G006', 'deskripsi' => 'Rasa takut dan bersalah yang hebat'],
            ['kode' => 'G007', 'deskripsi' => 'Mengompol di kasur pada malam hari'],
            ['kode' => 'G008', 'deskripsi' => 'Tidak mempunyai kepedulian terhadap kebersihan diri serta penampilan'],
            ['kode' => 'G009', 'deskripsi' => 'Lebih memilih berdiam diri dirumah dari pada bersosialisasi dengan lingkungan luar'],
            ['kode' => 'G010', 'deskripsi' => 'Berbicara, mendengar, serta melihat hal-hal yang tidak ada'],
            ['kode' => 'G011', 'deskripsi' => 'Memiliki ekspresi wajah yang datar walaupun sedang merasa senang ataupun sedih'],
            ['kode' => 'G012', 'deskripsi' => 'Tidak bisa membedakan dunia nyata dan khayalan'],
            ['kode' => 'G013', 'deskripsi' => 'Kecenderungan mengasingkan diri dari orang lain'],
            ['kode' => 'G014', 'deskripsi' => 'Terlihat sangat lelah atau bahkan terlihat sangat segar'],
            ['kode' => 'G015', 'deskripsi' => 'Terlalu sering tidur atau tidak butuh tidur'],
            ['kode' => 'G016', 'deskripsi' => 'Memiliki perilaku yang tidak sesuai dengan usianya'],
            ['kode' => 'G017', 'deskripsi' => 'Sering mengeluh sakit kepala atau sakit perut'],
            ['kode' => 'G018', 'deskripsi' => 'Terus menerus merasa hampa, sedih, atau cemas'],
            ['kode' => 'G019', 'deskripsi' => 'Sulit bersosialisasi'],
            ['kode' => 'G020', 'deskripsi' => 'Mengalami kesulitan membaca, menulis, atau berbicara'],
            ['kode' => 'G021', 'deskripsi' => 'Kurang peduli, simpati, dan empati'],
            ['kode' => 'G022', 'deskripsi' => 'Badan luka-luka'],
            ['kode' => 'G023', 'deskripsi' => 'Melakukan aktivitas berbahaya seperti membenturkan kepala'],
            ['kode' => 'G024', 'deskripsi' => 'Tidak bisa berkonsentrasi atau fokus'],
            ['kode' => 'G025', 'deskripsi' => 'Sering tidak menyelesaikan tugas/pekerjaan'],
            ['kode' => 'G026', 'deskripsi' => 'Berbicara tanpa henti hingga mengganggu orang lain'],
            ['kode' => 'G027', 'deskripsi' => 'Berbicara berulang kali untuk diri sendiri'],
            ['kode' => 'G028', 'deskripsi' => 'Memberi jawaban sebelum pertanyaan selesai diajukan'],
        ]);
    }
}
