<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Illuminate\Validation\Rules;


class ChangePasswordController extends Controller
{
    public function create()
    {
        return Inertia::render('Auth/UpdatePassword');
    }

    public function store(Request $request)
    {
        $request->validate([
            'c_password' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        if (Hash::check($request->c_password, auth()->user()->password)){
            auth()->user()->update([
                'password'   => Hash::make($request->password)
            ]);
        }

        return redirect('/home');
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'newPassword'   => 'required|min:8'
        ]);

        $user->update([
            'password'   => Hash::make($request->password)
        ]);

        return redirect()->back();
    }
}
