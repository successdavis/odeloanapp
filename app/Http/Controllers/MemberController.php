<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

use Inertia\Inertia;
use Spatie\Permission\Models\Role;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */

    public function index(Request $request)
    {
        $search = $request->search;

        $members = User::query()
            ->when($request->input('search'), function ($query, $search){
                $query->where('name', 'like', '%' . $search . '%');
                $query->orWhere('account_number', 'like', '%' . $search . '%');
            })
            ->orderBY('serial_no', 'asc')
            ->paginate(50);

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
            'email' => 'nullable|string|email|max:255|unique:members',
            'mobile' => 'required|min:11',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'sponsorid' => 'required',
            'lga' => 'required',
            'state' => 'required',
            'country' => 'required',

        ]);

        $member = new User();

        $this->saveMember($request, $member);

        return redirect('/members/' . $member->fresh()->id ,302);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Inertia\Response
     */
    public function show(User $member)
    {
        $lastloan = $member->loans()->where('Status',1)->first();
        $borrowedfunds = $lastloan ? number_format($lastloan->totalDue(),2) : 0;


        $nextpayment = $lastloan ? $lastloan->getNextPayment() : 0;
        $nextpaymentdue = $lastloan ? $lastloan->getMaturity() : 0;

        if ($lastloan && $lastloan->loancategory_id === 2) {
            $nextpayment = $lastloan->getLongTermNextPayment();
        }

        $roles = Role::all();

        $savingsbalance = number_format($member->account->totalSavingBalance());
        return Inertia::render('Member/Show', [
            'member'            => $member,
            'borrowedfunds'     => $borrowedfunds,
            'lastloan'          => $lastloan,
            'nextloanpayment'   => $lastloan,
            'savingsbalance'    => $savingsbalance,
            'nextpayment'       => number_format($nextpayment),
            'nextpaymentdue'    => $nextpaymentdue,
            'roles'             => $roles,
            'user_role'         => $member->getRoleNames()
        ]);
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, User $member)
    {
        $request->validate([
            'name' => 'required',
            'r_address' => 'required',
            'email' => 'nullable|string|email|max:255|unique:members',
            'mobile' => 'required|min:11',
                'lga' => 'required',
            'state' => 'required',
            'country' => 'required',
        ]);

        $this->saveMember($request, $member);

        return redirect('/members/' . $member->fresh()->id ,302);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(User $user)
    {
//        if (auth()->user()->account_number !== '1000001003') {
//            return redirect()->back();
//        }
        $user->delete();

        return redirect('/members');
    }

    /**
     * @param Request $request
     * @param User $member
     */
    protected function saveMember(Request $request, User $member): void
    {
        $member->name = ucwords($request->name);
        $member->state = $request->state;
        $member->lga = $request->lga;
        $member->gender = $request->gender;
        $member->title = $request->title;
        $member->mobile = $request->mobile;
        $member->email = $request->email;
        $member->business_name = $request->business_name;
        $member->dob = $request->dob;
        $member->country = $request->country;
        $member->serial_no = $request->serial_no;
        $member->r_address = $request->r_address;
        $member->p_address = $request->p_address;
        $member->working_status = $request->working_status;
        $member->description = $request->description;
        $member->sponsorid = $request->sponsorid;
        $member->password = Hash::make($request->password);

        $member->save();
    }
}
