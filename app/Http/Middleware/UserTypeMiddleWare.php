<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserTypeMiddleWare
{
    public function handle(Request $request, Closure $next, string $userType): Response
    {
        if ($request->user()->user_type === $userType) {
            return $next($request);
        }

        return redirect('/dashboard');
    }
}
