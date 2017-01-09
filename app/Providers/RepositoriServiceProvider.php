<?php

namespace CodeDelivery\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind(
        'CodeDelivery\Repositories\CategoryRepository', 
        'CodeDelivery\Repositories\CategoryRepositoryEloquent'
        );

        $this->app->bind(
        'CodeDelivery\Repositories\OrderRepository', 
        'CodeDelivery\Repositories\OrderRepositoryEloquent'
        );
        $this->app->bind(
        'CodeDelivery\Repositories\OrderItemRepository', 
        'CodeDelivery\Repositories\OrderItemRepositoryEloquent'
        );
        $this->app->bind(
        'CodeDelivery\Repositories\OrderItemRepository', 
        'CodeDelivery\Repositories\OrderItemRepositoryEloquent'
        );
        $this->app->bind(
        'CodeDelivery\Repositories\ProductItemRepository', 
        'CodeDelivery\Repositories\ProductItemRepositoryEloquent'
        );
        $this->app->bind(
        'CodeDelivery\Repositories\UserItemRepository', 
        'CodeDelivery\Repositories\UserItemRepositoryEloquent'
        );

    }
}