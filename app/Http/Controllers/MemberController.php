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
    public function index()
    {
        $members = Member::limit(20)->get();
        return Inertia::render('Member/Index', ['members' => $members]);
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
        $member->address = $request->address;
        $member->working_status = $request->working_status;
        $member->description = $request->description;

        $member->save();

        return response($member, 200);
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
