<?php

namespace App\Providers;

use App\Models\BackGround;
use App\Models\Sitting;
use Illuminate\Database\Schema\Builder;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */


    public function boot()
    {
        View::composer('*', function ($view) {
            $sitting = Sitting::get();

            $view->with('Site.Layouts.app', $sitting);
        });

        Builder::defaultStringLength(191);
        Paginator::useBootstrap();
    }
}
