<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Nextofkin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class NextofkinController extends Controller
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
    public function create(Member $member)
    {
        return Inertia::render('NextofKin/Create', ['member' => $member]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $request->validate([
             'name' => 'required',
            'relationship'  => 'required',
            'address'  => 'required',
            'gender'  => 'required',
            'mobile'  => 'required',
        ]);

        $nextofkin = new Nextofkin();
        $nextofkin->name = $request->name;
        $nextofkin->relationship = $request->relationship;
        $nextofkin->address = $request->address;
        $nextofkin->mobile = $request->mobile;
        $nextofkin->gender = $request->gender;
        $nextofkin->member_id = $request->member_id;
        $nextofkin->email = $request->email;

        $nextofkin->save();


//        return Redirect::back()->with('success', 'Next of Kin Added');
            return redirect('/members/' . $nextofkin->fresh()->member->id ,302);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nextofkin  $nextofkin
     * @return \Illuminate\Http\Response
     */
    public function show(Nextofkin $nextofkin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nextofkin  $nextofkin
     * @return \Illuminate\Http\Response
     */
    public function edit(Nextofkin $nextofkin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nextofkin  $nextofkin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nextofkin $nextofkin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nextofkin  $nextofkin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nextofkin $nextofkin)
    {
        //
    }
}
