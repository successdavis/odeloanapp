<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
//        $members = Member::where('name', 'like', '%' . $request->search . '%')->get();

        $search = $request->search;

        $members = Member::query()
            ->when($request->input('search'), function ($query, $search){
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->limit(20)
            ->get();

        return Inertia::render('Member/Index', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Member/Create');
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
            'name' => 'required',
            'r_address' => 'required',
            'email' => 'unique:members',
            'mobile' => 'required|min:11'
        ]);

        $member = new Member();
        $member->name = $request->name;
        $member->state = $request->state;
        $member->lga = $request->lga;
        $member->gender = $request->gender;
        $member->title = $request->title;
        $member->mobile = $request->mobile;
        $member->email = $request->email;
        $member->business_name = $request->business_name;
        $member->dob = $request->dob;
        $member->serial_no = $request->serial_no;
        $member->r_address = $request->r_address;
        $member->p_address = $request->p_address;
        $member->working_status = $request->working_status;
        $member->description = $request->description;

        $member->save();

        return redirect('/members/' . $member->fresh()->id ,302);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Inertia\Response
     */
    public function show(Member $member)
    {
        return Inertia::render('Member/Show', ['member' => $member]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
