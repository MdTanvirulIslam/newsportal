<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckDomain
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $host = $request->getHost();

        // Always allowed
        $allowedDomains = [
            'dainikgonojagoron.com',
            'www.dainikgonojagoron.com',
            'localhost',
            '127.0.0.1',
        ];

        // Check exact match
        if (in_array($host, $allowedDomains)) {
            return $next($request);
        }

        // Check subdomains of dainikgonojagoron.com
        if (substr($host, -strlen('.dainikgonojagoron.com')) === '.dainikgonojagoron.com') {
            return $next($request);
        }

        // Otherwise block
        abort(404, '404 - Please contact your admin');
    }
}
