<?php

namespace App\Http\Controllers;

use App\Http\Resources\PaymentResource;
use App\Models\Account;
use App\Models\Member;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create(Account $account)
    {
        return Inertia::render('Saving/Create', [
            'account' => $account,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Account $account, Request $request)
    {
        $account->addPayment($request->all());

        return redirect('/account/'. $account->member->id .'/view-account');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Inertia\Response
     */
    public function show(Member $member)
    {
        $account = $member->account;
        $totalSaving = $account->payments()->sum('amount');
        $totalInterest = $account->totalInterest();

        return Inertia::render('Saving/Show', [
            'account' => $account,
            'payments' => PaymentResource::collection($account->payments),
            'totalSaving' => number_format($totalSaving, 2),
            'totalInterest' => number_format($totalInterest, 2),
            'grandTotal' => number_format($totalInterest + $totalSaving),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
