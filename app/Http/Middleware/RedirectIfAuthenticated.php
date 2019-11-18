<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            
            if (Auth::user()->rol == "manager"){
                return redirect('administrador/dashboard');
            }
            elseif(Auth::user()->rol == "employee"){
                return redirect('administrador/empleado');
            }
            elseif(Auth::user()->rol == "client"){
                return redirect('sesion');
            }
        }

        return $next($request);
    }
}
