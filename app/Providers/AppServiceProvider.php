<?php

namespace App\Providers;

use App\View\Components\Index\ACustomer;
use App\View\Components\Index\Table;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Blade::component('index.table', Table::class);
        Blade::component('index.a-customer', ACustomer::class);
    }
}
