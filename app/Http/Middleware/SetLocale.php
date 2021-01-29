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
    // public function __construct(Menu $menu)
    // {
    //     $this->menu = $menu;
    // }

    public function handle($request, Closure $next, string $lang)
    {
        App::setLocale($lang);

        return $next($request);
    }
}
