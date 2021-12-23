<?php

namespace Hridoy\PrivacyPolicy;

use Illuminate\Support\ServiceProvider;

class PrivacyPolicyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/privacy_policy.php' => config_path('privacy_policy.php')
        ], 'config');
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/privacy_policy.php', 'privacy_policy'
        );
    }
}
