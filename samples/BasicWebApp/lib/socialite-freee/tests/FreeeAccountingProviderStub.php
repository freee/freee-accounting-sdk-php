<?php


namespace Freee\Socialite\Tests;

use Mockery as m;
use stdClass;
use Freee\Socialite\Drivers\FreeeAccountingProvider;

class FreeeAccountingProviderStub extends FreeeAccountingProvider
{
    /**
     * @var \GuzzleHttp\Client|\Mockery\MockInterface
     */
    public $http;

    protected function getAuthUrl($state)
    {
        return 'http://auth.url';
    }

    protected function getTokenUrl()
    {
        return 'http://token.url';
    }

    protected function getUserByToken($token)
    {
        return [
            'id' => 1,
            'first_name' => 'first',
            'last_name' => 'last',
            'display_name' => 'display_name',
            'email' => 'email',
        ];
    }

    /**
     * Get a fresh instance of the Guzzle HTTP client.
     *
     * @return \GuzzleHttp\Client|\Mockery\MockInterface
     */
    protected function getHttpClient()
    {
        if ($this->http) {
            return $this->http;
        }

        return $this->http = m::mock(stdClass::class);
    }
}
