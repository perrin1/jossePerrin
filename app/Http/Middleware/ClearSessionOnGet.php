<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class ClearSessionOnGet
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $previousUrl = url()->previous();
        $previousRoute = app('router')->getRoutes()->match(app('request')->create($previousUrl))->getName();

        if ($previousRoute != 'home') {
            Session::forget('filtered_data');
            Session::forget('filtered_localites');
        }

        return $next($request);
    }
}
