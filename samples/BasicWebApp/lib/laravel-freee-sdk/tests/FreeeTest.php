<?php

namespace Tests;

use Mockery as m;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

use Freee\Accounting\Api\CompaniesApi;
use Freee\Accounting\Laravel\Facades\Freee;
use Freee\Accounting\Laravel\Contracts\Factory;
use Freee\Accounting\Laravel\FreeeClient;
use Freee\Accounting\Configuration;

class FreeeTest extends TestCase
{
    public function testInstance()
    {
        $client = new FreeeClient('', '');

        $this->assertInstanceOf(FreeeClient::class, $client);
    }

    public function testContainer()
    {
        $client = app(Factory::class);

        $this->assertInstanceOf(FreeeClient::class, $client);
    }

    public function testConfig()
    {
        $config = Configuration::getDefaultConfiguration()->setAccessToken('test');

        $companiesApi = Freee::config($config)
            ->setHeaderSelector(null)
            ->setHostIndex(0)
            ->companies();

        $this->assertInstanceOf(CompaniesApi::class, $companiesApi);
        $this->assertSame($config, $companiesApi->getConfig());
    }

    public function testHttpClient()
    {
        $http = Freee::httpClient();

        $this->assertInstanceOf(Client::class, $http);
    }

    public function testRefresh()
    {
        $mock = new MockHandler([
            new Response(200, [], '{ "refresh_token" : "test" }'),
        ]);
        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        $res = Freee::setHttpClient($client)->refreshToken('token');

        $this->assertSame('test', $res['refresh_token']);
    }

    public function testTrait()
    {
        $client = (new User())->freee();

        $this->assertInstanceOf(FreeeClient::class, $client);
    }

    public function testMacro()
    {
        Freee::macro('test', function () {
            return 'test';
        });

        $test = Freee::test();

        $this->assertSame('test', $test);
    }

    public function testMacroException()
    {
        $this->expectException(\BadMethodCallException::class);

        Freee::fail();
    }
}
