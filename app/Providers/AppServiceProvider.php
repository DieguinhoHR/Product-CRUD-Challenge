<?php

namespace App\Providers;

use App\Models\Product;
use App\Observers\ProductImageObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Product::observe(ProductImageObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Product\IProductRepository',
            'App\Repositories\Product\ProductRepository'
        );
    }
}
