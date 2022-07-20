<?php

namespace App\Http\Controllers;

use App\Models\Fine;
use App\Models\Member;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $fine = Fine::query()
            ->when($request->input('search'), function ($query, $search){
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->paginate(50);

        return Inertia::render('Fine/Index', ['fines' => $fine]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create(Member $member)
    {
        return Inertia::render('Fine/Create',['Member' => $member]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Member $member, Request $request)
    {
        $member->fine()->create(
            $request->all()
        );

        return redirect('fine/member-fine/' . $member->id, 302);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fine  $fine
     * @return \Inertia\Response
     */
    public function show(Member $member)
    {
        $fines = $member->fine()->get();

        return Inertia::render('Fine/Show',['fines' => $fines, 'member' => $member]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fine  $fine
     * @return \Illuminate\Http\Response
     */
    public function edit(Fine $fine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fine  $fine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fine $fine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fine  $fine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fine $fine)
    {
        //
    }
}
