<?php

namespace App\Http\Middleware;

use Closure;

class checkAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handleAge($request, Closure $next){

        if($request->age && $request->age < 18){
            return redirect("noAccess");
        }

        return $next($request);
    }
}
