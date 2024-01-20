<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class)->name('home');

Route::get('/job', [JobController::class, 'index'])->name('job');
Route::get('/job/create', [JobController::class, 'create'])->name('job.create');
Route::middleware('auth')->post('/job', [JobController::class, 'store'])->name('job.store');
Route::get('/job/{job}', [JobController::class, 'show'])->name('job.show');
Route::middleware('auth')->get('/job/{job}/edit', [JobController::class, 'edit'])->name('job.edit');
Route::middleware('auth')->patch('/job/{job}', [JobController::class, 'update'])->name('job.update');
Route::middleware('auth')->delete('/job/{job}', [JobController::class, 'destroy'])->name('job.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
