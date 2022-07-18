<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\GuarantorController;
use App\Http\Controllers\LoancategoryController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NextofkinController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\UserController;
use App\Models\Loancategory;
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

Route::get('/getusers', [UserController::class, 'index']);

Route::get('/members', [MemberController::class, 'index']);
Route::get('/getsponsors', [SponsorController::class, 'index']);
Route::get('/members/register', [MemberController::class, 'create']);
Route::get('/members/{member}', [MemberController::class, 'show']);
Route::post('/members/register', [MemberController::class, 'store']);

Route::post('/memberpassport/{member}/avatar', [AvatarController::class, 'store']);

Route::post('/nextofkin/register', [NextofkinController::class, 'store']);
Route::get('/nextofkin/create/{member}', [NextofkinController::class, 'create']);


Route::get('/loans/view_loans', [LoanController::class, 'index']);
Route::get('/loans/create', [LoanController::class, 'create']);
Route::get('/loans/view_loan_details/{loan}', [LoanController::class, 'show']);
Route::post('/loans/create', [LoanController::class, 'store']);

Route::get('/loancategory/add', [LoancategoryController::class, 'create']);

Route::get('/repayment/{loan}', [PaymentController::class, 'create']);
Route::post('/repayment/{loan}/addpayment', [PaymentController::class, 'store']);

Route::get('/repayment/{loan}', [PaymentController::class, 'create']);

Route::get('/guarantor/{loan}/add', [GuarantorController::class, 'create']);
Route::post('/guarantor/{loan}/register', [GuarantorController::class, 'store']);


require __DIR__.'/auth.php';
