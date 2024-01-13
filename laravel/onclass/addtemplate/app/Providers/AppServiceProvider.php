<?php

namespace App\Providers;

use App\Services\Impl\ProductServiceImpl;
use App\Services\IProductService;
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
        $this->app->singleton(IProductService::class, ProductServiceImpl::class);
    }
}
