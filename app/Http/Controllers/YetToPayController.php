<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class YetToPayController extends Controller
{
    public function index()
    {
        return Inertia::render('Loan/YetToPay');
    }

    public function unpaid()
    {
        return Inertia::render('Loan/ListOfUnpaid');
    }
}
