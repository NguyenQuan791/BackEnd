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
            \App\Repositories\ContentRepository\ContentrepositoryInterface::class,
            \App\Repositories\ContentRepository\ContentRepository::class
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
