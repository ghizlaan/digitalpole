<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stagecontroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\EstimationController;

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

Route::get('/', [stagecontroller::class, 'index']);
Route::get('/home', [stagecontroller::class, 'showHome']);

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/equipe', function () {
    return view('equipe');
});

Route::get('/projet', [ProjetController::class, 'show'])->name('projet.show');
Route::post('/projet', [ProjetController::class, 'store'])->name('projet.store');

// Route pour calculer l'estimation
Route::post('/calculate-estimation', [ProjetController::class, 'calculateEstimation'])->name('calculate.estimation');

// Route pour afficher les résultats de l'estimation
Route::get('/estimation', [ProjetController::class, 'showEstimation'])->name('afficher.estimation');

Route::get('/modifier-estimation/{id}', [ProjetController::class, 'modifier'])->name('modifier.estimation');
Route::put('/update-estimation/{id}', [ProjetController::class, 'update'])->name('update.estimation');


