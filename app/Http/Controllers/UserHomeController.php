<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserHomeController extends Controller
{
    public function index()
    {
        return Inertia::render('User/Index');
    }
}
