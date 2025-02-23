<?php

namespace App\Providers;

use App\Models\InstituteInfo;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $institute = InstituteInfo::first();
            $view->with('institute', $institute);
        });
    }
}
