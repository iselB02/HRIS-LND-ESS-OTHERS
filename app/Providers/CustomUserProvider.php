<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use App\Extensions\CustomUserProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register the custom user provider
        Auth::provider('custom', function($app, array $config) {
            return new CustomUserProvider($app['hash'], $config['model']);
        });
    }

    public function register()
    {
        //
    }
}
