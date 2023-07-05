<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Fine;
use App\Models\Loan;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CustomerServiceDashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $totalSaving        = $user->todaySavingsCollection();

        $totalLTLoan        = $user->todayLongTermLoanCollection();

        $totalSTLoan        = $user->todayShortTermLoanCollection();

        $totalFine          = $user->todayTotalFinesCollection();

        $totalCollection    = $user->todayGrandTotalCollection();

        return Inertia::render('Dashboard/CustomerServiceAgent', [
            'total_savings' => number_format($totalSaving, 2),
            'total_LT_Loan' => $totalLTLoan,
            'total_ST_Loan' => $totalSTLoan,
            'total_fine' => $totalFine,
            'total_collection'  => number_format($totalCollection, 2)
        ]);
    }
}
