<?php

namespace App\Providers;

use App\Extensions\SampleSessionGuard;
use App\Extensions\FreeeUserProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
  /**
   * The policy mappings for the application.
   *
   * @var array
   */
  protected $policies = [
    // 'App\Model' => 'App\Policies\ModelPolicy',
  ];
 
  /**
   * Register any authentication / authorization services.
   *
   * @return void
   */
  public function boot()
  {
    $this->registerPolicies();

    Auth::extend('freee', function ($app, $name, array $config) {
      return new SampleSessionGuard(
        $name,
        Auth::createUserProvider($config['provider']),
        $app['session.store']
      );
    });

    Auth::provider('freee', function ($app, array $config) {
      return new FreeeUserProvider();
    });
  }
}
