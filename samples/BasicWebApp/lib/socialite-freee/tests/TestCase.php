<?php

namespace Tests;

use Laravel\Socialite\SocialiteServiceProvider;
use Freee\Socialite\FreeeServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            SocialiteServiceProvider::class,
            FreeeServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            //
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set(
            'services.freee-accounting',
            [
                'client_id'     => 'test',
                'client_secret' => 'test',
                'redirect'      => 'http://localhost',
            ]
        );
    }
}
