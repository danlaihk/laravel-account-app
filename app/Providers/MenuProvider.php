<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Service\Layouts\Menu;

class MenuProvider extends ServiceProvider
{



    public function boot()
    {
        $this->composeView();

    }

    protected function composeView(){

        view()->composer('partials.admin.menu', 'App\Service\Layouts\MenuImpl@compose');

        // view()->composer('partials.admin.menu', 'App\Service\Layouts\Menu@compose');
    }
}
