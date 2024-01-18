<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // check login
        if ( auth()->check()  ) {
            if ( auth()->user()->isAdmin() ) {
                return $next($request);
            } else {
                abort(404, '');
            }
        }

        // check not login
        if ( !auth()->check() ) {
            return redirect()->route('admin.login');
        }

        abort(403, 'Unauthorized access.');
    }
}
