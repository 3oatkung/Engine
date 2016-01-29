<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Payment;

class IsMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        if (Auth::user()->memberStatus == "Member" || Auth::user()->memberStatus == "Admin")
        {
            return $next($request);
        }
        elseif(count(Payment::where('email',Auth::user()->email)->get())>0)
        {
            $user = Auth::user();
            $user->memberStatus == "Member";
            $user->save();
            dd($user);
            return $next($request);
        }
 
        return view('errors.notMember');
    }
}
