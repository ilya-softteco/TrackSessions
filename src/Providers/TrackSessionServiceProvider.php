<?php
declare(strict_types=1);

namespace CIG\TrackSession\Providers;

use CIG\TrackSession\Services\TrackSessionServices;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class TrackSessionServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('track.session', function (Application $app) {
            return new TrackSessionServices();
        });

        //$this->app->bind(TrackSessionServices::class, TrackSessionServices::class);
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
