<?php

namespace CIG\TrackSession\Providers;

use CIG\TrackSession\Services\TrackSessionServices;
use Illuminate\Support\ServiceProvider;

class TrackSessionServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->bind(TrackSessionServices::class, TrackSessionServices::class);
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }
}
