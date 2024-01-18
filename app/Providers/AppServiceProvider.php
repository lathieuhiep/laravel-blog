<?php

namespace App\Providers;

use App\Repositories\Admin\User\AdminAdminUserRepository;
use App\Repositories\Admin\User\AdminUserRepositoryInterface;
use App\Repositories\User\Post\PostRepository;
use App\Repositories\User\Post\PostRepositoryInterface;
use App\Services\Admin\AdminUserService;
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
            // Admin User Repository
            AdminUserRepositoryInterface::class => AdminAdminUserRepository::class,
            AdminUserService::class => function ($app) {
                return new AdminUserService($app->make(AdminUserRepositoryInterface::class));
            },

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
