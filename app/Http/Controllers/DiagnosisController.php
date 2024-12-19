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
        $cfGabungan = 0; // CF gabungan awal

        foreach ($aturanList as $aturan) {
            if ($aturan->penyakit_id == $penyakit->id) {
                $gejalaRule = explode(',', $aturan->kode_gejala); 

                foreach ($gejalaRule as $kodeGejala) {
                    if (in_array($kodeGejala, $gejalaInput)) {
                        $mb = 0.8; // Nilai MB (pakar) default
                        $md = 0.2; // Nilai MD (pakar) default
                        $cfUser = $cfUserInput[$kodeGejala] ?? 1; // Nilai CF dari pengguna

                        $cf = ($mb - $md) * $cfUser; // CF[H,E]

                        // Kombinasi CF
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

    // Mengurutkan hasil dari CF terbesar
    usort($hasilDiagnosis, fn($a, $b) => $b['cf'] <=> $a['cf']);

    if (!empty($hasilDiagnosis)) {
        return response()->json(['status' => 'success', 'diagnosis' => $hasilDiagnosis]);
    }

    return response()->json(['status' => 'error', 'message' => 'Tidak ditemukan penyakit yang cocok']);
}


    public function startQuiz()
    {
        // Reset sesi untuk jawaban pengguna
        session()->forget('quiz_answers');
        session(['quiz_index' => 0]);

        // Redirect ke pertanyaan pertama
        return redirect()->route('quiz.question', 0);
    }

    public function showQuestion($index)
    {
        // Ambil gejala berdasarkan indeks
        $gejalas = Gejala::all();
        if ($index >= $gejalas->count()) {
            return redirect()->route('quiz.result');
        }

        $gejala = $gejalas[$index];

        return view('quiz.question', compact('gejala', 'index'));
    }

    public function saveAnswer(Request $request)
    {
        $gejalaKode = $request->input('gejala_kode');
        $cfUser = $request->input('cf_user', 1);

        // Simpan jawaban pengguna ke sesi
        $answers = session('quiz_answers', []);
        $answers[$gejalaKode] = $cfUser;
        session(['quiz_answers' => $answers]);

        // Pindah ke pertanyaan berikutnya
        $nextIndex = $request->input('next_index');
        return redirect()->route('quiz.question', $nextIndex);
    }

    public function showResult()
    {
        $answers = session('quiz_answers', []);
        $aturanList = Aturan::all();
        $penyakitList = Penyakit::all();

        $hasilDiagnosis = [];

        foreach ($penyakitList as $penyakit) {
            $cfGabungan = 0;

            foreach ($aturanList as $aturan) {
                if ($aturan->penyakit_id == $penyakit->id) {
                    $gejalaRule = explode(',', $aturan->kode_gejala);

                    foreach ($gejalaRule as $kodeGejala) {
                        if (isset($answers[$kodeGejala])) {
                            $cfPakar = 0.8;
                            $cfUser = $answers[$kodeGejala];

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

        usort($hasilDiagnosis, fn($a, $b) => $b['cf'] <=> $a['cf']);

        return view('quiz.result', compact('hasilDiagnosis'));
    }
}
