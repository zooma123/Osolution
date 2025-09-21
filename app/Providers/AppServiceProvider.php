<?php

namespace App\Providers;


use App\Service\TaskService ;
use App\Service\CategoryService ;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
              $this->app->singleton(TaskService::class, function ($app) {
            return new TaskService();
        });

        $this->app->singleton(CategoryService::class, function ($app) {
            return new CategoryService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
