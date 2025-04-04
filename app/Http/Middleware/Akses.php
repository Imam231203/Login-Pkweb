<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Akses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    //UBAH BAGIAN INI
    public function handle(Request $request, Closure $next,$role): Response 
    {
        if(auth()->user()->role == $role){
             return $next($request);
        } 
        return abort(401);
    }
}
