<?php

namespace Freee\Accounting\Laravel;

use BadMethodCallException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Illuminate\Support\Str;
use Illuminate\Support\Traits\Macroable;
use Freee\Accounting\Configuration;
use Freee\Accounting\HeaderSelector;
use Freee\Accounting\Laravel\Contracts\Factory;

class FreeeClient implements Factory
{
    use Macroable {
        __call as macroCall;
    }

    use Concerns\RefreshToken;

    /**
     * @var string
     */
    protected $client_id;

    /**
     * @var string
     */
    protected $client_secret;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var ClientInterface
     */
    protected $http;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex = 0;

    /**
     * @param  string  $client_id
     * @param  string  $client_secret
     */
    public function __construct(string $client_id, string $client_secret)
    {
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
    }

    /**
     * @param  Configuration  $config
     *
     * @return $this
     */
    public function config(Configuration $config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * @return ClientInterface
     */
    public function httpClient()
    {
        if (is_null($this->http)) {
            $this->http = new Client();
        }

        return $this->http;
    }

    /**
     * @param  ClientInterface  $http
     *
     * @return $this
     */
    public function setHttpClient(ClientInterface $http)
    {
        $this->http = $http;

        return $this;
    }

    /**
     * @param  HeaderSelector  $headerSelector
     *
     * @return $this
     */
    public function setHeaderSelector(?HeaderSelector $headerSelector)
    {
        $this->headerSelector = $headerSelector;

        return $this;
    }

    /**
     * @param  int  $hostIndex
     *
     * @return $this
     */
    public function setHostIndex(int $hostIndex = 0)
    {
        $this->hostIndex = $hostIndex;

        return $this;
    }

    /**
     * Dynamically handle calls to the class.
     *
     * @param  string  $method
     * @param  array  $parameters
     *
     * @return mixed
     *
     * @throws BadMethodCallException
     */
    public function __call($method, $parameters)
    {
        if (static::hasMacro($method)) {
            return $this->macroCall($method, $parameters);
        }

        $api = 'Freee\\Accounting\\Api\\'.Str::studly($method).'Api';

        if (class_exists($api)) {
            return new $api($this->http, $this->config, $this->headerSelector, $this->hostIndex);
        }

        throw new BadMethodCallException(sprintf(
            'Method %s::%s does not exist.', static::class, $method
        ));
    }
}
