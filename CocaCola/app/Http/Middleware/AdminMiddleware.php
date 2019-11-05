<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class AdminMiddleware
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
        if(Auth::user()->usertype == "admin"){
            return $next($request);
        }
        else{
            //if user tries to acces dashboard it wil be redirected home with status message
            return redirect('/home')->with('status', "Acces to view this page has been denied");
        }

    }
}
