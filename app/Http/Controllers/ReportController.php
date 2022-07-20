<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ReportController extends Controller
{
    public function index()
    {
        $totalPayments = Payment::whereDate('created_at', Carbon::today())->sum('amount');
        $totalSaving = Payment::where('billable_type', 'App\Models\Account')
            ->whereDate('created_at', Carbon::today())
            ->sum('amount');

        $totalLoan = Loan::where('status', 1)
            ->whereDate('created_at', Carbon::today())
            ->sum('principal_amount');
//
        $totalLoanPayment = Payment::where('billable_type', 'App\Models\Loan')
            ->whereDate('created_at', Carbon::today())
            ->sum('amount');
        $pendingloans = Loan::where('status', 0)
            ->whereDate('created_at', Carbon::today())
            ->count();
        $totalInterestFromAllLoan = Loan::todayTotalInterestFromAllLoan();
//        $treasurer_balance = Payment::sum('amount') - $totalLoan;

        return Inertia::render('Report/Today', [
            'totalSaving' => number_format($totalSaving, 2),
            'totalPayments' => number_format($totalPayments, 2),
            'totalLoan' => number_format($totalLoan, 2),
            'totalLoanPayment' => number_format($totalLoanPayment, 2),
            'pendingloans' => $pendingloans,
            'totalInterestFromAllLoan' => number_format($totalInterestFromAllLoan,2),
//            'totalMembers' => $totalMembers,
//            'treasurer_balance' => number_format($treasurer_balance, 2),
        ]);
    }
}
