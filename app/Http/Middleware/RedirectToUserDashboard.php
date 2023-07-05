<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectToUserDashboard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!empty(auth()->user()->getRoleNames()->toArray())){
            $role = auth()->user()->getRoleNames(); // This line assumes the user has only one role
            return redirect()->route($role[0] .'.dashboard');
        }

        abort(400, 'you do not have access to this resource');
//        return $next($request);
    }
}
