<?php

use App\Http\Controllers\MemberController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/members', [MemberController::class, 'index']);
//Route::get('/members/{id}', [MemberController::class, 'show']);
Route::get('/members/{member}', [MemberController::class, 'show']);
Route::post('/members/register', [MemberController::class, 'store']);

require __DIR__.'/auth.php';
