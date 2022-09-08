<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserHomeController extends Controller
{
    public function index()
    {
        $member = auth()->user();
        $lastloan = $member->loans()->where('Status',1)->first();
        $borrowedfunds = $lastloan ? number_format($lastloan->totalDue(),2) : 0;

        $savingsbalance = number_format($member->account->totalSavingBalance());
        return Inertia::render('User/Index', [
            'member' => $member,
            'borrowedfunds' => $borrowedfunds,
            'lastloan' => $lastloan,
            'nextloanpayment' => $lastloan,
            'savingsbalance' => $savingsbalance
        ]);

    }
}
