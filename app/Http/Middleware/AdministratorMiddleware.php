<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdministratorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->user()===null){
            return redirect()->route('login');
        }
        else if($request->user()->role==='Administrator'){
            return $next($request);
        }
        else{
            return redirect()->route('dashboard');
        }
    }
}
