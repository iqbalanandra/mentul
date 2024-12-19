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
        $gejalas = Gejala::paginate(9); 
        return view('welcome', compact('gejalas'));
    }

    public function diagnosis(Request $request)
    {
        $gejalaInput = $request->input('gejala', []); 
        $cfUserInput = $request->input('cf_user', []); 

        if (empty($gejalaInput)) {
            return response()->json(['status' => 'error', 'message' => 'Silakan pilih gejala terlebih dahulu']);
        }

        $aturanList = Aturan::all(); 
        $penyakitList = Penyakit::all(); 

        $hasilDiagnosis = []; 

        foreach ($penyakitList as $penyakit) {
            $cfGabungan = 0;

            foreach ($aturanList as $aturan) {
                if ($aturan->penyakit_id == $penyakit->id) {
                    $gejalaRule = explode(',', $aturan->kode_gejala); 

                    foreach ($gejalaRule as $kodeGejala) {
                        if (in_array($kodeGejala, $gejalaInput)) {
                            $cfPakar = 0.8; 
                            $cfUser = $cfUserInput[$kodeGejala] ?? 1; 

                            $cf = $cfPakar * $cfUser;

                            if ($cfGabungan == 0) {
                                $cfGabungan = $cf;
                            } else {
                                $cfGabungan = $cfGabungan + ($cf * (1 - $cfGabungan));
                            }
                        }
                    }
                }
            }

            if ($cfGabungan > 0) {
                $hasilDiagnosis[] = [
                    'penyakit' => $penyakit->nama,
                    'cf' => round($cfGabungan, 4),
                    'deskripsi' => $penyakit->deskripsi,
                ];
            }
        }

        // Mengurut hasil dari CF terbesar
        usort($hasilDiagnosis, fn($a, $b) => $b['cf'] <=> $a['cf']);

        if (!empty($hasilDiagnosis)) {
            return response()->json(['status' => 'success', 'diagnosis' => $hasilDiagnosis]);
        }

        return response()->json(['status' => 'error', 'message' => 'Tidak ditemukan penyakit yang cocok']);
    }
}
