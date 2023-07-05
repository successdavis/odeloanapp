<?php

namespace App\Http\Controllers;

use App\Http\Resources\CollectionResource;
use App\Models\Fine;
use App\Models\Loan;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ReportController extends Controller
{
    public function index()
    {
        $today = Carbon::today();

        $totalPayments = Payment::whereDate('created_at', Carbon::today())->sum('amount');
        $totalSaving = Payment::where('billable_type', 'App\Models\Account')
            ->whereDate('created_at', Carbon::today())
            ->sum('amount');

        $totalLoan = Loan::where('status', 1)
            ->whereDate('created_at', Carbon::today())
            ->sum('principal_amount');
//
        $lCategoryId = 2;
        $totalLTLoan = Payment::whereDate('created_at', $today)
            ->where('billable_type', Loan::class)
            ->whereHasMorph('billable', Loan::class, function ($query) use ($lCategoryId) {
                $query->where('loancategory_id', $lCategoryId);
            })
            ->sum('amount');

        $sCategoryId = 1;
        $totalSTLoan = Payment::whereDate('created_at', $today)
            ->where('billable_type', Loan::class)
            ->whereHasMorph('billable', Loan::class, function ($query) use ($sCategoryId ) {
                $query->where('loancategory_id', $sCategoryId );
            })
            ->sum('amount');

          $fines = Payment::whereDate('created_at', $today)
            ->where('billable_type', Fine::class)
            ->sum('amount');

        $pendingloans = Loan::where('status', 0)
            ->whereDate('created_at', Carbon::today())
            ->count();
        $totalInterestFromAllLoan = Loan::todayTotalInterestFromAllLoan();
//        $treasurer_balance = Payment::sum('amount') - $totalLoan;

        return Inertia::render('Report/Today', [
            'totalSaving'                 => number_format($totalSaving, 2),
            'totalPayments'               => number_format($totalPayments, 2),
            'totalLoan'                   => number_format($totalLoan, 2),
//            'totalLoanPayment'            => number_format($totalLoanPayment, 2),
            'pendingloans'                => $pendingloans,
            'totalInterestFromAllLoan'    => number_format($totalInterestFromAllLoan,2),
            'total_lt_Loan'               => number_format($totalLTLoan, 2),
            'total_st_loan'               => number_format($totalSTLoan, 2),
            'fines'                       => number_format($fines, 2)
        ]);
    }

    public function show(Request $request)
    {

        $staffs = User::whereHas('roles')->get();

       if(request()->wantsJson()) {
           return collectionResource::collection($staffs);
       }

        return Inertia::render('Report/StaffPaymentReport', [
            'collections'   => collectionResource::collection($staffs)
        ]);
    }
}
