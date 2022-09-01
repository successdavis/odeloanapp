<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AccountInterestController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FineController;
use App\Http\Controllers\FinePaymentController;
use App\Http\Controllers\GuarantorController;
use App\Http\Controllers\LoanApplicationStatusController;
use App\Http\Controllers\LoancategoryController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NextofkinController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\WelcomeController;
use App\Models\Loancategory;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', [UserHomeController::class, 'index']);
});

Route::group(['middleware' => 'auth'], function() {

    Route::get('/dashboard', [DashboardController::class, 'index']);

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
    Route::get('/loans/view-long-term', [LoanController::class, 'long']);
    Route::get('/loans/pending_loans', [LoanController::class, 'pending']);

    Route::get('/loans/short-long-term', [LoanController::class, 'short']);

    Route::get('/loans/create', [LoanController::class, 'create']);
    Route::get('/loans/view_loan_details/{loan}', [LoanController::class, 'show']);
    Route::post('/loans/create', [LoanController::class, 'store']);

    Route::get('/loan/{loan}/approve-loan', [LoanApplicationStatusController::class, 'store']);
    Route::get('/loan/{loan}/reject-loan', [LoanApplicationStatusController::class, 'destroy']);

    Route::get('/loancategory/add', [LoancategoryController::class, 'create']);

    Route::get('/repayment/{loan}', [PaymentController::class, 'create']);
    Route::post('/repayment/{loan}/addpayment', [PaymentController::class, 'store']);

    Route::get('/repayment/{loan}', [PaymentController::class, 'create']);

    Route::get('/guarantor/{loan}/add', [GuarantorController::class, 'create']);
    Route::post('/guarantor/{loan}/register', [GuarantorController::class, 'store']);


    Route::get('/account/{account}/addtransaction', [AccountController::class, 'create']);
    Route::post('/account/{account}/savetransaction', [AccountController::class, 'store']);
    Route::get('/account/{member}/view-account', [AccountController::class, 'show']);
    Route::post('/account/{account}/set-interest', [AccountInterestController::class, 'store']);
    Route::get('/savings/accounts', [AccountController::class, 'index']);

    Route::get('/create-fine/{member}', [FineController::class, 'create']);
    Route::post('/fine/create-fine/{member}', [FineController::class, 'store']);
    Route::get('/fines', [FineController::class, 'index']);
    Route::get('/fine/member-fine/{member}', [FineController::class, 'show']);
    Route::get('/fine/{fine}/pay', [FinePaymentController::class, 'store']);


    Route::get('/today-report', [ReportController::class, 'index']);
});

require __DIR__.'/auth.php';
