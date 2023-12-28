<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Menu;

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
        //dd($menus);
        View::composer('*', function ($view) use ($menus) {
            $view->with(['mainMenu' => $menus]);
        });
    }
}
