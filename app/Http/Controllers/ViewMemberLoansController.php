<?php

namespace App\Http\Controllers;

use App\Http\Resources\LoanResource;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ViewMemberLoansController extends Controller
{
    public function index(User $user)
    {
        $long_term_loans    = $user->loans()->where('loancategory_id', 2)->get();
        $short_term_loans   = $user->loans()->where('loancategory_id', 1)->get();

        return Inertia::render('Member/MemberLoans', [
            'long_term_loans'   => LoanResource::collection($long_term_loans),
            'short_term_loans'  => LoanResource::collection($short_term_loans)
        ]);
    }
}
