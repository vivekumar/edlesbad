<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Menu;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();

        $menus = Menu::orderBy('sort_order', 'asc')->where(['type' => 'header', 'parent_id' => 0])->with('page', 'children')->get();
        $footer_menus = Menu::orderBy('sort_order', 'asc')->where(['type' => 'footer', 'parent_id' => 0])->with('page')->get();

        View::composer('*', function ($view) use ($menus, $footer_menus) {
            $view->with(['mainMenu' => $menus, 'footerMenu' => $footer_menus]);
        });
    }
}
