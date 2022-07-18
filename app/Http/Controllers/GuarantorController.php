<?php

namespace App\Http\Controllers;

use App\Models\Guarantor;
use App\Models\Loan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GuarantorController extends Controller
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
    public function create(Loan $loan)
    {
        return Inertia::render('Guarantor/Create', ['loan' => $loan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Loan $loan, Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'gender' => 'required',
            'occupation' => 'required',
            'working_address' => 'required',
            'loan_id' => 'required',
        ]);

        $guarantor = new Guarantor();
        $guarantor->name = $request->name;
        $guarantor->address = $request->address;
        $guarantor->mobile = $request->mobile;
        $guarantor->gender = $request->gender;
        $guarantor->occupation = $request->occupation;
        $guarantor->working_address = $request->working_address;
        $guarantor->loan_id = $request->loan_id;

        $guarantor->save();

        return redirect('/loans/view_loan_details/' . $loan->id ,302);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guarantor  $guarantor
     * @return \Illuminate\Http\Response
     */
    public function show(Guarantor $guarantor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guarantor  $guarantor
     * @return \Illuminate\Http\Response
     */
    public function edit(Guarantor $guarantor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guarantor  $guarantor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guarantor $guarantor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guarantor  $guarantor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guarantor $guarantor)
    {
        //
    }
}
