<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Freee\Accounting\Laravel\Facades\Freee;

class FreeeTest extends TestCase
{
    use RefreshDatabase;

    public function testHome()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get('/home');

        $response->assertStatus(200);
    }

    public function testMeFacade()
    {
        Freee::shouldReceive('config');

        Freee::shouldReceive('companies->getCompanies')->andReturn(json_encode([
            'companies' => [
                [
                    'id' => 1,
                    'role' => 'admin',
                ]
            ]
        ]));

        Freee::shouldReceive('deals->getDeals->getDeals')->andReturn([]);

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('me_facade'));

        $response->assertStatus(200)
            ->assertViewHas(['user', 'deals'])
            ->assertSeeText($user->email);
    }

    public function testMeTrait()
    {
        Freee::shouldReceive('config->companies->getCompanies')->andReturn(json_encode([
            'companies' => [
                [
                    'id' => 1,
                    'role' => 'admin',
                ]
            ]
        ]));

        Freee::shouldReceive('config->deals->getDeals->getDeals')->andReturn([]);

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('me_trait'));

        $response->assertStatus(200)
            ->assertViewHas(['user', 'deals'])
            ->assertSeeText($user->email);
    }

    public function testMeMacro()
    {
        Freee::shouldReceive('config->getCompanyId')->andReturn(0);
        Freee::shouldReceive('config->getDeals')->andReturn([]);

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('me_macro'));

        $response->assertStatus(200)
            ->assertSeeText($user->email);
    }

    public function testRefresh()
    {
        Freee::shouldReceive('refreshToken')->andReturn([
            'access_token' => 'access_token',
            'refresh_token' => 'refresh_token',
            'expires_in' => 0,
        ]);

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('refresh_token'));

        $this->assertDatabaseHas('users', [
            'access_token' => 'access_token',
            'refresh_token' => 'refresh_token',
        ]);

        $response->assertRedirect();
    }
}
