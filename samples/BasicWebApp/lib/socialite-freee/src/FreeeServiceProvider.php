<?php

namespace Freee\Socialite;

use Illuminate\Support\ServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class FreeeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the service provider.
     *
     * @return void
     */
    public function boot()
    {
        Socialite::extend('freee', function ($app) {
            $config = $app['config']['services.freee'];

            return Socialite::buildProvider(FreeeProvider::class, $config);
        });
    }
}
