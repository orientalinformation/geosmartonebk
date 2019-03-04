<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
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
        if ($request->session()->exists('locale')) {
            if ($request->session()->get('locale') === 'fr') {
                App::setLocale('fr');
            } else {
                App::setLocale('en');
            }
        } else {
            $request->session()->put('locale', 'fr');
            App::setLocale('fr');
        }
        return $next($request);
    }
}
