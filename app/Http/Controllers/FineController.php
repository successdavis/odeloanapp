<?php

namespace App\Http\Controllers;

use App\Http\Resources\FineResource;
use App\Models\Fine;
use App\Models\Member;
use App\Models\User;
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
            ->where('status', false)->paginate(50);

        return Inertia::render('Fine/Index', ['fines' => FineResource::collection($fine)]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create(User $member)
    {
        return Inertia::render('Fine/Create',[
            'Member' => $member,
            'transaction_ref' => uniqid()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(User $member, Request $request)
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
    public function show(User $member)
    {
        $fines = $member->fine()->get();

        return Inertia::render('Fine/Show',[
            'fines' => FineResource::collection($fines),
            'member' => $member,
            'transaction_ref' => uniqid()
        ]);
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
