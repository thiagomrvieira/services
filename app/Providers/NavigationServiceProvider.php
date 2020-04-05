<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Model com os itens de menu
// use App\Menu;

class NavigationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // acessa todas as views
        view()->composer('*', function($view){
            $menu = 'Teste';
            // $menu = Menu::all()
            return $view->with('menu', $menu);
        });
    }
}
