<?php

namespace Freee\Accounting\Laravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;
use Freee\Accounting\Laravel\FreeeClient;
use Freee\Accounting\Laravel\Contracts\Factory;

class FreeeServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Factory::class, function ($app) {
            return new FreeeClient(
                $app['config']['services.freee.client_id'],
                $app['config']['services.freee.client_secret']
            );
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [Factory::class];
    }
}
