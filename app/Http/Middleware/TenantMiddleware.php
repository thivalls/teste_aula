<?php

namespace App\Http\Middleware;

use Closure;

class TenantMiddleware
{
    public function handle($request, Closure $next)
    {
        \Tenant::setTenant(auth()->user());
        return $next($request);
    }
}
