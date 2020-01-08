<?php

namespace Tests;

use Mockery as m;

use stdClass;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\User;
use Freee\Socialite\Drivers\FreeeAccountingProvider;

class SocialiteTest extends TestCase
{
    public function tearDown(): void
    {
        parent::tearDown();

        m::close();
    }

    public function testInstance()
    {
        $provider = Socialite::driver('freee-accounting');

        $this->assertInstanceOf(FreeeAccountingProvider::class, $provider);
    }

    public function testRedirect()
    {
        $request = Request::create('foo');
        $request->setLaravelSession($session = m::mock(Session::class));
        $session->shouldReceive('put')->once();

        $provider = new FreeeAccountingProvider($request, 'client_id', 'client_secret', 'redirect');
        $response = $provider->redirect();

        $this->assertInstanceOf(RedirectResponse::class, $response);
        $this->assertStringStartsWith('https://accounts.secure.freee.co.jp/public_api/authorize', $response->getTargetUrl());
    }

    public function testUser()
    {
        $request = Request::create('foo', 'GET', ['state' => str_repeat('A', 40), 'code' => 'code']);
        $request->setLaravelSession($session = m::mock(Session::class));
        $session->shouldReceive('pull')->once()->with('state')->andReturn(str_repeat('A', 40));

        $provider = new FreeeAccountingProviderStub($request, 'client_id', 'client_secret', 'redirect_uri');

        $provider->http = m::mock(stdClass::class);

        $provider->http->shouldReceive('post')->once()->with(
            'http://token.url',
            [
                'headers'     => ['Accept' => 'application/json'],
                'form_params' => [
                    'client_id'     => 'client_id',
                    'client_secret' => 'client_secret',
                    'code'          => 'code',
                    'redirect_uri'  => 'redirect_uri',
                    'grant_type'    => 'authorization_code',
                ],
            ]
        )->andReturn($response = m::mock(stdClass::class));

        $response->shouldReceive('getBody')->once()->andReturn(
            '{ "access_token" : "access_token", "refresh_token" : "refresh_token", "expires_in" : 3600 }'
        );

        $user = $provider->user();

        $this->assertInstanceOf(User::class, $user);
        $this->assertSame(1, $user->id);
        $this->assertSame('access_token', $user->token);
        $this->assertSame('refresh_token', $user->refreshToken);
        $this->assertSame('last first', $user->name);
        $this->assertSame('display_name', $user->nickname);
        $this->assertSame('email', $user->email);
        $this->assertSame(3600, $user->expiresIn);
    }
}
