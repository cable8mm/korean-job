<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QnaController;
use App\Http\Controllers\Social\AuthenticatedSocialController;
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
Route::get('/job/{job}', [JobController::class, 'show'])->name('job.show');
Route::middleware('auth')->get('/job/create', [JobController::class, 'create'])->name('job.create');
Route::middleware('auth')->post('/job', [JobController::class, 'store'])->name('job.store');
Route::middleware('auth')->get('/job/{job}/edit', [JobController::class, 'edit'])->name('job.edit');
Route::middleware('auth')->patch('/job/{job}', [JobController::class, 'update'])->name('job.update');
Route::middleware('auth')->delete('/job/{job}', [JobController::class, 'destroy'])->name('job.destroy');

Route::get('/notice', [NoticeController::class, 'index'])->name('notice');
Route::get('/notice/{notice}', [NoticeController::class, 'show'])->name('notice.show');

Route::get('/qna', [QnaController::class, 'index'])->name('qna');
Route::get('/qna/{qna}', [QnaController::class, 'show'])->name('qna.show');
Route::middleware('auth')->get('/qna/create', [QnaController::class, 'create'])->name('qna.create');
Route::middleware('auth')->post('/qna', [QnaController::class, 'store'])->name('qna.store');
Route::middleware('auth')->get('/qna/{qna}/edit', [QnaController::class, 'edit'])->name('qna.edit');
Route::middleware('auth')->patch('/qna/{qna}', [QnaController::class, 'update'])->name('qna.update');
Route::middleware('auth')->delete('/qna/{qna}', [QnaController::class, 'destroy'])->name('qna.destroy');

Route::get('/community', [CommunityController::class, 'index'])->name('community');

Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
Route::middleware('auth')->get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::middleware('auth')->post('/post', [PostController::class, 'store'])->name('post.store');
Route::middleware('auth')->get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::middleware('auth')->patch('/post/{post}', [PostController::class, 'update'])->name('post.update');
Route::middleware('auth')->delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');

Route::middleware('guest')->get('/social/{provider}/redirect', [AuthenticatedSocialController::class, 'redirectProvider'])->name('social.redirect');
Route::middleware('guest')->get('/social/{provider}/callback', [AuthenticatedSocialController::class, 'callbackProvider'])->name('social.callback');

Route::middleware('auth')->get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::middleware('auth')->patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::middleware('auth')->delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

require __DIR__.'/auth.php';
