<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $loans = Loan::query()
            ->when($request->input('search'), function ($query, $search){
                $query->where('principal_amount', 'like', '%' . $search . '%');
            })
            ->paginate(50);

        return Inertia::render('Loan/Index', ['loans' => $loans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Loan/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
           'member_id' => 'required|exists:members,id',
            'principal_amount' => 'required',
            'duration'  => 'required',
            'loan_interest' => 'required',
            'grace_period' => 'required',
        ]);

        $loan = new Loan();

        $loan->member_id = $request->member_id;
        $loan->principal_amount = $request->principal_amount;
        $loan->duration = $request->duration;
        $loan->loan_interest = $request->loan_interest;
        $loan->grace_period = $request->grace_period;

        $loan->save();

        return redirect('/loans/view_loan_details/' . $loan->fresh()->id ,302);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Inertia\Response
     */
    public function show(Loan $loan)
    {
        return Inertia::render('Loan/Show',['loan' => $loan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        //
    }
}
