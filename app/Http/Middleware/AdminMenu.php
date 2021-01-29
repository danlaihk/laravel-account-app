<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\View;

use App\Service\Layouts\Menu;
use Closure;

class AdminMenu
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

    public function handle($request, Closure $next)
    {
        // dd($menu);
        // view()->share('check', 'test middleware');
        return $next($request);
    }
}
