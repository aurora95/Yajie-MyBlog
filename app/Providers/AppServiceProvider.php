<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\ArticleClass;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('articleclasses', ArticleClass::all());
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
