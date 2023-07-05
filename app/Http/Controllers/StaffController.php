<?php

namespace App\Http\Controllers;

use App\Http\Resources\StaffResource;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = User::whereHas('roles')->get();

        return Inertia::render('Member/Staffs/Index', [
            'staffs'    => StaffResource::collection($staffs),
        ]);
    }

    public function update(User $user)
    {
        $roles = $user->getRoleNames();

        $user->removeRole($roles[0]);

        return redirect()->back();
    }

    public function store(Request $request, User $user)
    {
        request()->validate([
            'position'  => 'required'
        ]);

        $user->syncRoles($request->position);

        return redirect()->back();
    }
}
