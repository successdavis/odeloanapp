<?php

namespace App\Http\Controllers;

use App\Http\Resources\PaymentResource;
use App\Models\Account;
use App\Models\Member;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AccountController extends Controller
{

        use SoftDeletes;

    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $totalSaving = Payment::where('billable_type', 'App\Models\Account')->sum('amount');
        return Inertia::render('Saving/Index', ['totalSaving' => number_format($totalSaving, 2)]);
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
            'reference_code' => uniqid()
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
        request()->validate([
           'transaction_ref' => ['required', 'unique:payments']
        ]);

        $account->addPayment($request->all());

        return redirect('/account/'. $account->user->id .'/view-account');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Inertia\Response
     */
    public function show(User $user)
    {

        $account = $user->account;
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
     * @return bool
     */
    public function destroy(Account $account)
    {
//        return $account->delete();
    }
}
