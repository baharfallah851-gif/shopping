<?php

namespace App\Providers;

use App\View\Components\Index\Table;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;

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
        Paginator::useBootstrapFive(); // for page

        Blade::component('index.table', Table::class);              //for component

        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);       //for api

    }
}
