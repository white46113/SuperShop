<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Beforelogin
{
    public function handle(Request $request, Closure $next): Response
    {
       
        if (auth()->check() && auth()->user()->status !== 'active') {
            
            return response()->json(['message' => 'Unauthorized, your account is inactive'], 403);
        }

        return $next($request);
    }
}
