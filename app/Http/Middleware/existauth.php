<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class existauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(($request->session()->has('id') && url('login')==$request->url())||(url('registration')==$request->url() && $request->session()->has('id'))){
           return back();
        }
        return $next($request);
    }
}
