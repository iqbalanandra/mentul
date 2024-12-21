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
        return view('home', compact('gejalas'));
    }


    public function startQuiz()
    {
        session()->forget('quiz_answers');
        session(['quiz_index' => 0]);

        return redirect()->route('quiz.question', 0);
    }

    public function showQuestion($index)
    {
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

        $answers = session('quiz_answers', []);
        $answers[$gejalaKode] = $cfUser;
        session(['quiz_answers' => $answers]);

        $nextIndex = $request->input('next_index');
        return redirect()->route('quiz.question', $nextIndex);
    }

    public function showResult()
{
    $answers = session('quiz_answers', []); // Ambil jawaban dari sesi
    $aturanList = Aturan::all();
    $penyakitList = Penyakit::all();

    $hasilDiagnosis = [];

    foreach ($penyakitList as $penyakit) {
        $cfGabungan = 0;
        $gejalaTerpenuhi = 0;

        foreach ($aturanList as $aturan) {
            if ($aturan->penyakit_id == $penyakit->id) {
                $gejalaRule = explode(',', $aturan->kode_gejala);

                foreach ($gejalaRule as $kodeGejala) {
                    if (isset($answers[$kodeGejala])) { // Gunakan jawaban dari sesi
                        $gejalaTerpenuhi++;
                        $cfUser = $answers[$kodeGejala];
                        $mb = 0.8; // Nilai MB default
                        $md = 0.2; // Nilai MD default

                        $cf = ($mb - $md) * $cfUser;

                        if ($cfGabungan == 0) {
                            $cfGabungan = $cf;
                        } else {
                            $cfGabungan = $cfGabungan + ($cf * (1 - abs($cfGabungan)));
                        }
                    }
                }
            }
        }

        if ($cfGabungan > 0) {
            $hasilDiagnosis[] = [
                'penyakit' => $penyakit->nama,
                'cf' => round($cfGabungan * 100, 2), // Ubah ke persen
                'deskripsi' => $penyakit->deskripsi,
            ];
        }
    }

    // Filter hasil dengan CF lebih dari 95%
    $hasilDiagnosis = array_filter($hasilDiagnosis, fn($hasil) => $hasil['cf'] > 95);

    // Urutkan hasil berdasarkan CF terbesar
    usort($hasilDiagnosis, fn($a, $b) => $b['cf'] <=> $a['cf']);

    return view('quiz.result', compact('hasilDiagnosis'));

        
    }
}