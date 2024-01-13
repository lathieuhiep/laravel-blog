<?php

namespace App\Providers;

use App\Repositories\User\Post\PostRepository;
use App\Repositories\User\Post\PostRepositoryInterface;
use App\Services\User\PostService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $bindings = [
            // Post Repository
            PostRepositoryInterface::class => PostRepository::class,
            PostService::class => function ($app) {
                return new PostService($app->make(PostRepositoryInterface::class));
            },
        ];

        foreach ($bindings as $abstract => $concrete) {
            $this->app->bind($abstract, $concrete);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
