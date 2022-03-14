<?php

namespace App\Http\Middleware;

use Closure;

class ageChecker
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
        if($request->age && $request->age < 18){
            return redirect("noAccess");
        }
        return $next($request);
    }
}
