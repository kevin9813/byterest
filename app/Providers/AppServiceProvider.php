<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Observers\ModelObserver;
//Models
use App\Models\Product;
use App\Models\User;
use App\Models\RolePermission;

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
        // crear log
        //RolePermission::observe(ModelObserver::class);
        //Product::observe(ModelObserver::class);
        //User::observe(ModelObserver::class);
    }
}
