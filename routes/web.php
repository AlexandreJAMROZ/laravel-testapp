<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

/* // Setup
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
*/

// ================= HOME =================
Route::view('/', 'home');

// ================= POSTS =================
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'view_create']);
Route::post('/posts/create', [PostController::class, 'post_create']);
Route::get('/posts/{id}', [PostController::class, 'show'])->whereNumber('id');

// ================= CONTACT =================
Route::get('/contact', [ContactController::class, 'index']);
