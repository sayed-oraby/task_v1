<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if($guard == 'en') {

            session()->put('locale','en');
            app()->setLocale('en');
            return $next($request);

        } else {

            session()->put('locale','ar');
            app()->setLocale('ar');
            return $next($request);
            
        }

    }
}
