<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserSearchController extends Controller
{
    public function index(Request $request)
    {
        if(!$request->search) {return [];};

         $users = User::query()
            ->when($request->input('search'), function ($query, $search){
                $query->where('name', 'like', '%' . $search . '%');
            })->get();
         return $users;
    }
}
