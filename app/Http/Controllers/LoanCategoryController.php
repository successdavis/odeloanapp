<?php

namespace App\Http\Controllers;

use App\Models\Loancategory;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LoanCategoryController extends Controller
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
    public function create()
    {
        return Inertia::render('Loancategory/create');
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
     * @param  \App\Models\Loancategory  $loanCategory
     * @return \Illuminate\Http\Response
     */
    public function show(Loancategory $loanCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loancategory  $loanCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Loancategory $loanCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loancategory  $loanCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loancategory $loanCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loancategory  $loanCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loancategory $loanCategory)
    {
        //
    }
}
