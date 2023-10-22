<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function ($user) {
            return $user->role === 'admin';
        });

        Gate::define('isUser', function ($user) {
            return $user->role === 'user';
        });

        JWTAuth::requireToken();
    }

    public function registerPolicies()
    {
        $this->app->make('App\Policies\MoviePolicy');
    }
}
