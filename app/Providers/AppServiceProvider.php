<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\ArticleClass;

use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('base', function($view)
        {
            $view->with('articleclasses', ArticleClass::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
