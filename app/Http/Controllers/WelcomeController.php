<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Member;
use App\Models\Payment;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $totalSaving = Payment::where('billable_type', 'App\Models\Account')->sum('amount');
        $totalLoan = Loan::where('status', 1)->sum('principal_amount');

        $totalLoanPayment = Payment::where('billable_type', 'App\Models\Loan')->sum('amount');
        $totalMembers = Member::count();
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

//        return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
