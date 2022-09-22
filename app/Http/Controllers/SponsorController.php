<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SponsorController extends Controller
{
    public function index (Request $request) {
        if(!$request->search) {return [];};
        return User::where('name', 'like', '%' . $request->search . '%')->get();
    }
}
