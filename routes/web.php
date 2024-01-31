<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QnaController;
use App\Http\Controllers\Social\AuthenticatedSocialController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', HomeController::class)->name('home');
    Route::get('/job/{sort?}', [JobController::class, 'index'])->name('job')->whereIn('sort', ['popular']);
    Route::get('/job/{job}', [JobController::class, 'show'])->name('job.show')->whereNumber('job');
    Route::middleware('auth')->get('/job/create', [JobController::class, 'create'])->name('job.create');
    Route::middleware('auth')->post('/job', [JobController::class, 'store'])->name('job.store');
    Route::middleware('auth')->get('/job/{job}/edit', [JobController::class, 'edit'])->name('job.edit')->whereNumber('job');
    Route::middleware('auth')->patch('/job/{job}', [JobController::class, 'update'])->name('job.update')->whereNumber('job');
    Route::middleware('auth')->delete('/job/{job}', [JobController::class, 'destroy'])->name('job.destroy')->whereNumber('job');

    Route::get('/notice', [NoticeController::class, 'index'])->name('notice');
    Route::get('/notice/{notice}', [NoticeController::class, 'show'])->name('notice.show');

    Route::get('/qna', [QnaController::class, 'index'])->name('qna');
    Route::get('/qna/{qna}', [QnaController::class, 'show'])->name('qna.show')->whereNumber('qna');
    Route::middleware('auth')->get('/qna/create', [QnaController::class, 'create'])->name('qna.create');
    Route::middleware('auth')->post('/qna', [QnaController::class, 'store'])->name('qna.store');
    Route::middleware('auth')->get('/qna/{qna}/edit', [QnaController::class, 'edit'])->name('qna.edit')->whereNumber('qna');
    Route::middleware('auth')->patch('/qna/{qna}', [QnaController::class, 'update'])->name('qna.update')->whereNumber('qna');
    Route::middleware('auth')->delete('/qna/{qna}', [QnaController::class, 'destroy'])->name('qna.destroy')->whereNumber('qna');

    Route::get('/community', [CommunityController::class, 'index'])->name('community');

    Route::get('/post', [PostController::class, 'index'])->name('post');
    Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show')->whereNumber('post');
    Route::middleware('auth')->get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::middleware('auth')->post('/post', [PostController::class, 'store'])->name('post.store');
    Route::middleware('auth')->get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit')->whereNumber('post');
    Route::middleware('auth')->patch('/post/{post}', [PostController::class, 'update'])->name('post.update')->whereNumber('post');
    Route::middleware('auth')->delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy')->whereNumber('post');

    Route::middleware('guest')->get('/social/{provider}/redirect', [AuthenticatedSocialController::class, 'redirectProvider'])->name('social.redirect');
    Route::middleware('guest')->get('/social/{provider}/callback', [AuthenticatedSocialController::class, 'callbackProvider'])->name('social.callback');

    Route::middleware('auth')->get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::middleware('auth')->patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::middleware('auth')->delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/pages/{slug}', PagesController::class)->name('pages');
});

require __DIR__.'/auth.php';
