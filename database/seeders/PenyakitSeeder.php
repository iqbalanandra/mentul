<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penyakit')->insert([
            ['kode' => 'P1', 'nama' => 'Gangguan Kecemasan Umum (Generalized Anxiety Disorder)', 'deskripsi' => 'Gangguan kecemasan yang melibatkan kekhawatiran berlebihan.'],
            ['kode' => 'P2', 'nama' => 'Skizofrenia', 'deskripsi' => 'Gangguan yang mempengaruhi cara berpikir, merasa, dan berperilaku.'],
            ['kode' => 'P3', 'nama' => 'Bipolar', 'deskripsi' => 'Gangguan suasana hati dengan episode mania dan depresi.'],
            ['kode' => 'P4', 'nama' => 'Autisme', 'deskripsi' => 'Gangguan perkembangan yang memengaruhi kemampuan berkomunikasi dan berinteraksi.'],
            ['kode' => 'P5', 'nama' => 'ADHD', 'deskripsi' => 'Gangguan hiperaktif dan sulit konsentrasi.'],
        ]);
    }
}
