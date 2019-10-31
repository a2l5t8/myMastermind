<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class checkAccountActivation
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
        // teachers
        if(Auth::user()->teacher->is_active != 1)
        {
            return redirect('/teacher/dashboard');
        }

        return $next($request);
    }
}
