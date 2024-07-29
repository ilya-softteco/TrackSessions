<?php

declare(strict_types=1);

namespace CIG\TrackSession\Providers;

use CIG\TrackSession\Services\TrackSessionServices;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class TrackSessionServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->app->singleton('track.session', function (Application $app) {
            return new TrackSessionServices();
        });

    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }
}
