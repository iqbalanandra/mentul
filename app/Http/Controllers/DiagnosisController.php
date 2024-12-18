<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Aturan;

class DiagnosisController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::paginate(9); // Batasi 9 gejala per halaman
        return view('welcome', compact('gejalas'));
    }
    public function diagnosis(Request $request)
    {
        $gejalaInput = $request->input('gejala'); // Gejala dari user (array kode gejala)

        $aturan = Aturan::all();
        foreach ($aturan as $rule) {
            $gejalaRule = explode(',', $rule->kode_gejala); // Pisahkan gejala pada aturan
            if (empty(array_diff($gejalaRule, $gejalaInput))) {
                // Jika semua gejala pada aturan ada dalam input user
                $penyakit = Penyakit::find($rule->penyakit_id);
                return response()->json([
                    'status' => 'success',
                    'penyakit' => $penyakit->nama,
                    'deskripsi' => $penyakit->deskripsi,
                ]);
            }
        }

        return response()->json(['status' => 'error', 'message' => 'Tidak ditemukan penyakit yang cocok']);
    }

}
