<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aturan')->insert([
            ['kode_gejala' => 'G001,G002,G003,G004,G005,G006,G007', 'penyakit_id' => 1], // P1
            ['kode_gejala' => 'G008,G009,G010,G011,G012,G013', 'penyakit_id' => 2], // P2
            ['kode_gejala' => 'G014,G015,G016,G017,G018', 'penyakit_id' => 3], // P3
            ['kode_gejala' => 'G019,G020,G021,G022', 'penyakit_id' => 4], // P4
            ['kode_gejala' => 'G023,G024,G025,G026,G027,G028', 'penyakit_id' => 5], // P5
        ]);
    }
}
