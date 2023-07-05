<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DirectorDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $totalSaving = Payment::where('billable_type', 'App\Models\Account')->sum('amount');
        $totalLoan = Loan::where('status', 1)->orWhere('status', 2)->sum('principal_amount');

        $totalLoanPayment = Payment::where('billable_type', 'App\Models\Loan')->sum('amount');
        $totalMembers = User::count();
        $treasurer_balance = Payment::sum('amount') - $totalLoan;
        $totalPayments = Payment::sum('amount');
        $pendingloans = Loan::where('status', 0)->count();
        $totalInterestFromAllLoan = Loan::totalInterestFromAllLoan();

        return Inertia::render('Welcome', [
            'totalSaving' => number_format($totalSaving, 2),
            'totalLoan' => number_format($totalLoan, 2),
            'totalMembers' => $totalMembers,
            'treasurer_balance' => number_format($treasurer_balance, 2),
            'totalLoanPayment' => number_format($totalLoanPayment, 2),
            'totalPayments' => number_format($totalPayments, 2),
            'pendingloans' => $pendingloans,
            'totalInterestFromAllLoan' => number_format($totalInterestFromAllLoan,2),
        ]);
    }
}
