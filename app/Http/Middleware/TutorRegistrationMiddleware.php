<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TutorRegistrationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // 0 -> tutor isn't verified / ordinary customer
        // 1 -> tutor is verified
        // 2 -> still verifying tutor
        
        if(Auth::user()->is_verified_tutor != 0){
            
            return redirect()->route('tutor.reg.pending');
        }
        return $next($request);
    }
}
