<?php

namespace App\Http\Controllers;

use App\Http\Resources\LoanCollection;
use App\Http\Resources\LoanResource;
use App\Http\Resources\PaymentResource;
use App\Models\Loan;
use App\Models\Loancategory;
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

        return Inertia::render('Loan/Index', ['loans' => LoanResource::collection($loans)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        $loancategory = Loancategory::all();
        return Inertia::render('Loan/Create', ['loancategory' => $loancategory]);
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
//            'duration'  => 'required',
//            'loan_interest' => 'required',
//            'grace_period' => 'required',
            'loancategory_id' => 'required',
        ]);

        $loan = new Loan();

        $loan->member_id        = $request->member_id;
        $loan->principal_amount = $request->principal_amount;
        $loan->duration         = $request->duration;
        $loan->loan_interest    = $request->loan_interest;
        $loan->grace_period     = $request->grace_period;
        $loan->loancategory_id  = $request->loancategory_id;
        $loan->maturity         = $request->maturity;
        $loan->release_date     = $request->release_date;
        $loan->payment_date     = $request->payment_date;

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
        $member = $loan->owner;
        $payments = $loan->payments;
        $guarantors = $loan->guarantors()->get();
        return Inertia::render('Loan/Show',[
            'loan' => new LoanResource($loan),
            'member' => $member,
            'payments' => PaymentResource::collection($payments),
            'guarantors' => $guarantors
        ]);
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
