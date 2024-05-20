<?php

namespace App\Providers;

use Schema;
use App\Models\parametre;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

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
        Schema::enableForeignKeyConstraints();
        if (!app()->runningInConsole()) {
            View::composer(['layout.menu','layout.header','welcome',('auth.login')], function ($view) {

                $information = parametre::first();
                $view->with('information', $information);
            });
        }
    }
}
