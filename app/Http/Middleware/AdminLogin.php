<?php

namespace App\Http\Middleware;

use Closure;
use PhpParser\Node\Stmt\Echo_;

class AdminLogin
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
        if (!session('admin')) {
            return redirect('home');
        };

        return $next($request);
    }
}
