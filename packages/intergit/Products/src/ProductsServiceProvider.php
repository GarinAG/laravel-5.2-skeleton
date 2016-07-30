<?php

namespace Intergit\Products;

use Illuminate\Support\ServiceProvider;
use Intergit\Products\Http\Controllers;

class ProductsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/Http/routes.php';
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'Products');
        $this->publishes([
            __DIR__ . '/migrations/' => base_path('/database/migrations'),
            __DIR__ . '/published/soadmin/' => base_path('/app/Admin'),
            __DIR__ . '/resources/views' => resource_path('views/vendor/Products'),
        ], 'category');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}