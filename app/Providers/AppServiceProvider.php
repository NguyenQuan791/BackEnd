<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(
            \App\Repositories\BookRepository\BookRepositoryInterface::class,
            \App\Repositories\BookRepository\BookRepository::class,
        ); 
        $this->app->singleton(
            \App\Repositories\ContentRepository\ContentRepositoryInterface::class,
            \App\Repositories\ContentRepository\ContentRepository::class
        ); 
        $this->app->singleton(
            \App\Repositories\PageRepository\PageRepositoryInterface::class,
            \App\Repositories\PageRepository\PageRepository::class
        ); 
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
