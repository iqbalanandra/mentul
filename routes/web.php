<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DiagnosisController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/quiz/start', [DiagnosisController::class, 'startQuiz'])->name('quiz.start');
Route::post('/quiz/answer', [DiagnosisController::class, 'saveAnswer'])->name('quiz.answer');
Route::get('/quiz/result', [DiagnosisController::class, 'showResult'])->name('quiz.result');
Route::get('/quiz/question/{index}', [DiagnosisController::class, 'showQuestion'])->name('quiz.question');
