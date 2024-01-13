<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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
        if ( auth()->check() ) {
            return $next($request);
        }

        // check not login
        if ( !auth()->check() ) {
            return redirect()->route('admin.form-login-show');
        }

        abort(403, 'Unauthorized access.');
    }
}
